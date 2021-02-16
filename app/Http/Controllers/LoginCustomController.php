<?php

namespace App\Http\Controllers;

use Auth;
use App\Log;
use Validator;
use App\Student;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

        $agent = new Agent();
        $browser = $agent->platform().'/'.$agent->browser().' '.$agent->version($agent->browser());

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

            Log::create([
                'std_id' => Auth::guard('student')->user()->std_id,
                'browser' => $browser
            ]);

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
