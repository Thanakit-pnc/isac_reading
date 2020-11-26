<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Auth;
use App\Student;
use Validator;

class LoginCustomController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('student', ['except' => 'logout']);
    }

    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('login')
                    ->withErrors($validator)
                    ->withInput();
        }

        $student = Student::where('std_username', $request->username)
                        ->where('std_password', md5($request->password))
                        ->first();

        if($student) {
            Auth::guard('student')->login($student);

            return redirect('/home');
        } else {
            return back()->with('status', 'Username or password do not match');
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->flush();
        return redirect('/login');
    }

}
