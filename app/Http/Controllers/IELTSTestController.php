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

        return view('ielts_tests.practice-test-01', compact('timer'));
    }
}
