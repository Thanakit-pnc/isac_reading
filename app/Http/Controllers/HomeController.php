<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Student;
use DB;
use Exception;

class HomeController extends Controller
{

    public function index() {
        return view('home');
    }

    public function pdf($level, $fileName) {
        
        $title = ucwords(str_replace('-', ' ', $fileName));
        $pdfURL = "public/assets/pdf/".$level."/".$fileName.'.pdf#toolbar=0';

        $pdf = ['title' => $title, 'url' => $pdfURL];

        return view('pdf', compact('pdf'));
    }
 
}
