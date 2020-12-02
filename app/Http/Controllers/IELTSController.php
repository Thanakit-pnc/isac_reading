<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
class IELTSController extends Controller
{
    // an environmental disaster
    public function exam_one($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.an-environmental-disaster', compact('timer'));
    }
    public function store_exam_one(Request $request) {
        dd($request->all());
        $arr = [
            'q1' => ['answer' => $request->q1, 'status' => 1, 'rightAns' => 'A'],
            'q2' => ['answer' => $request->q2, 'status' => 1, 'rightAns' => 'A'],
            'q3' => ['answer' => $request->q3, 'status' => 1, 'rightAns' => 'A'],
            'q4' => ['answer' => $request->q4, 'status' => 1, 'rightAns' => 'A'],
            'q5' => ['answer' => $request->q5, 'status' => 1, 'rightAns' => 'A'],
            'q6' => ['answer' => $request->q6, 'status' => 1, 'rightAns' => 'A'],
            'q7' => ['answer' => $request->q7, 'status' => 1, 'rightAns' => 'A'],
            'q8' => ['answer' => $request->q8, 'status' => 1, 'rightAns' => 'A'],
            'q9' => ['answer' => $request->q9, 'status' => 1, 'rightAns' => 'A'],
            'q10' => ['answer' => $request->q10, 'status' => 1, 'rightAns' => 'A'],
            'q11' => ['answer' => $request->q11, 'status' => 1, 'rightAns' => 'A'],
            'q12' => ['answer' => $request->q12, 'status' => 1, 'rightAns' => 'A'],
            'q13' => ['answer' => $request->q13, 'status' => 1, 'rightAns' => 'A']
        ];

        return response()->json($arr);
    }

    // body piercing
    public function store_exam2(Request $request) {
        dd($request->all());
    }
}
