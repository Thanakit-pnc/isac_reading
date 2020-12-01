<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IELTSController extends Controller
{
    // An environmental disaster
    public function exam1(Request $request) {
        return view('ielts.an-environmental-disaster');
    }
}
