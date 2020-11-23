<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class GeneralController extends Controller
{
    public function chooseLevel($level) {

        if($level == 'L1') {
            $level = 'level_1';
        } elseif($level == 'L2') {
            $level = 'level_2';
        } else {
            $level = 'level_3';
        }

        return view('general_english.'.$level);
    } 
}
