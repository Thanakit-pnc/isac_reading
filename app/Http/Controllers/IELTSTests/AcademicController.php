<?php

namespace App\Http\Controllers\IELTSTests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    public function academic() {
        
        $type = 'Academic';
        
        $practices = [
            '1' => "Academic test 01"
        ];

        return view('ielts_tests.index', compact('practices', 'type'));
    }

    public function academic_test_01($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test01.index', compact('timer'));
    }

    public function ac_test_01(Request $request) {

        $answers = [
            'q1' => 'c',
            'q2' => 'a',
            'q3' => 'c',
            'q4' => 'b',
            'q5' => 'd',
            'q6' => 'D',
            'q7' => 'A',
            'q8' => 'G',
            'q9' => 'B',
            'q10' => 'H',
            'q11' => 'g',
            'q12' => 'h',
            'q13' => 'f',
            'q14' => 'c',
            'q15' => 'NOT GIVEN',
            'q16' => 'TRUE',
            'q17' => 'FALSE',
            'q18' => 'TRUE',
            'q19' => 'FALSE',
            'q20' => 'D',
            'q21' => 'B',
            'q22' => 'A',
            'q23' => 'B',
            'q24' => 'C',
            'q25' => 'd',
            'q26' => 'c',
            'q27' => 'b',
            'q28' => 'TRUE',
            'q29' => 'FALSE',
            'q30' => 'FALSE',
            'q31' => 'NOT GIVEN',
            'q32' => 'FALSE',
            'q33' => 'b',
            'q34' => 'd',
            'q35' => 'b',
            'q36' => 'd',
            'q37' => 'g',
            'q38' => 'a',
            'q39' => 'j',
            'q40' => 'i',
        ];

        $total = count($answers);
        $score = 0;
        // R = Right | W = Wrong
        $status;

        $get_string = $request->input('data');
        parse_str($get_string, $get_array);

        $results = [];

        try {
            foreach($answers as $key => $value) {
                if(!isset($get_array[$key])) {
                    $get_array[$key] = "";
                }
                
                if($get_array[$key] == $value) {
                    $score++;
                    $status = 'R';
                } else {
                    $status = 'W';
                }  

                $results['total'] = "Your scores : ".$score.'/'.$total;
                $results['exam'][$key] = ['stdAnswer' => $get_array[$key], 'status' => $status, 'rightAnswer' => $answers[$key]];
            }
        } catch(Exception $e) {
            return response()->json(['message' => $e->getMessage().' : '.'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }
}
