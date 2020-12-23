<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IELTSTestController extends Controller
{
    public function practice_test_01($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.test01.index', compact('timer'));
    }

    public function store_test_01(Request $request) {
        $get_string = $request->input('data');
        parse_str($get_string, $get_array);
        dd($get_array);
    }
}
