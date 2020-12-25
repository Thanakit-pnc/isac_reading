<?php

namespace App\Http\Controllers\IELTSTests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function general() {
        
        $type = 'General Training';

        $practices = [
            '1' => "General Training test 01"
        ];
        
        return view('ielts_tests.index', compact('practices', 'type'));
    }
}
