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

        $answers = array(
            'q1' => 'FALSE',
            'q2' => 'FALSE',
            'q3' => 'NOT GIVEN',
            'q4' => 'TRUE',
            'q5' => 'NOT GIVEN',
            'q6' => 'D',
            'q7' => 'A',
            'q8' => 'C',
            'q9' => 'B',
            'q10' => 'B',
            'q11' => 'D',
            'q12' => 'C',
            'q13' => 'A',
        );

        $score = 0;
        $count = count($answers);
        
        // 1 = Right | 0 = Wrong
        $status = 0;

        $get_string = $request->input('data');
        parse_str($get_string, $get_array);

        $results = [];
        
        try {
            foreach($answers as $key => $answer) {
                if(isset($get_array[$key])) {
                    if($get_array[$key] == $answer) {
                        $score++;
                        $status = 1;
                    } else {
                        $status = 0;
                    }
                } else {
                    $status = 0;
                }
                $results['total'] = "Your score : ".$score.'/'.$count;
                $results['exam'][$key] = ['status' => $status, 'rightAnswer' => $answer];
            } 

        } catch(Exception $e) {
            return response()->json(['message' => 'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // body piercing
    public function exam_two($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.body-piercing', compact('timer'));
    }
    public function store_exam_two(Request $request) {

        $answers = array(
            'q1' => 'FALSE',
            'q2' => 'TRUE',
            'q3' => 'TRUE',
            'q4' => 'NOT GIVEN',
            'q5' => 'NOT GIVEN',
            'q6' => 'D',
            'q7' => 'B',
            'q8' => 'C',
            'q9' => 'A',
            'q10' => 'C',
            'q11' => 'D',
            'q12' => 'C',
            'q13' => 'A',
        );

        $score = 0;
        $count = count($answers);
        
        // 1 = Right | 0 = Wrong
        $status = 0;

        $get_string = $request->input('data');
        parse_str($get_string, $get_array);

        $results = [];
        
        try {
            foreach($answers as $key => $answer) {
                if(isset($get_array[$key])) {
                    if($get_array[$key] == $answer) {
                        $score++;
                        $status = 1;
                    } else {
                        $status = 0;
                    }
                } else {
                    $status = 0;
                }
                $results['total'] = "Your score : ".$score.'/'.$count;
                $results['exam'][$key] = ['status' => $status, 'rightAnswer' => $answer];
            } 

        } catch(Exception $e) {
            return response()->json(['message' => 'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // How animals communicate
    public function exam_three($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.how-animals-communicate', compact('timer'));
    }
    public function store_exam_three(Request $request) {

        $answers = array(
            'q1' => 'NOT GIVEN',
            'q2' => 'TRUE',
            'q3' => 'FALSE',
            'q4' => 'TRUE',
            'q5' => 'FALSE',
            'q6' => 'D',
            'q7' => 'B',
            'q8' => 'A',
            'q9' => 'B',
            'q10' => 'C',
            'q11' => 'D',
            'q12' => 'C',
            'q13' => 'B',
        );

        $score = 0;
        $count = count($answers);
        
        // 1 = Right | 0 = Wrong
        $status = 0;

        $get_string = $request->input('data');
        parse_str($get_string, $get_array);

        $results = [];
        
        try {
            foreach($answers as $key => $answer) {
                if(isset($get_array[$key])) {
                    if($get_array[$key] == $answer) {
                        $score++;
                        $status = 1;
                    } else {
                        $status = 0;
                    }
                } else {
                    $status = 0;
                }
                $results['total'] = "Your score : ".$score.'/'.$count;
                $results['exam'][$key] = ['status' => $status, 'rightAnswer' => $answer];
            } 

        } catch(Exception $e) {
            return response()->json(['message' => 'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // The Mysterious Kris
    public function exam_four($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.the-mysterious-kris', compact('timer'));
    }
    public function store_exam_four(Request $request) {

        $answers = array(
            'q1' => 'D',
            'q2' => 'B',
            'q3' => 'C',
            'q4' => 'C',
            'q5' => 'A',
            'q6' => 'G',
            'q7' => 'F',
            'q8' => 'A',
            'q9' => 'D',
            'q10' => 'C',
            'q11' => 'D',
            'q12' => 'H',
            'q13' => 'A',
            'q14' => 'B',
        );

        $score = 0;
        $count = count($answers);
        
        // 1 = Right | 0 = Wrong
        $status = 0;

        $get_string = $request->input('data');
        parse_str($get_string, $get_array);

        $results = [];
        
        try {
            foreach($answers as $key => $answer) {
                if(isset($get_array[$key])) {
                    if($get_array[$key] == $answer) {
                        $score++;
                        $status = 1;
                    } else {
                        $status = 0;
                    }
                } else {
                    $status = 0;
                }
                $results['total'] = "Your score : ".$score.'/'.$count;
                $results['exam'][$key] = ['status' => $status, 'rightAnswer' => $answer];
            } 

        } catch(Exception $e) {
            return response()->json(['message' => 'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }
}
