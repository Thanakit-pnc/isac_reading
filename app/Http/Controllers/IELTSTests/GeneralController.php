<?php

namespace App\Http\Controllers\IELTSTests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function general() {
        
        $type = 'General Training';

        $practices = [
            '1' => "General Training Test 01",
            '2' => "General Training Test 02",
            '3' => "General Training Test 03",
            '4' => "General Training Test 04",
            '5' => "General Training Test 05",
        ];
        
        return view('ielts_tests.index', compact('practices', 'type'));
    }

    // Test01
    public function general_test_01($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.general.test01.index', compact('timer'));
    }

    public function gt_test_01(Request $request) {

        $answers = [
            'q1' => 'd',
            'q2' => 'f',
            'q3' => 'c',
            'q4' => 'b',
            'q5' => 'e',
            'q6' => 'a',
            'q7' => 'treasure hunt',
            'q8' => 'mini-triathlon',
            'q9' => 'donkey',
            'q10' => 'sandcastle competition',
            'q11' => 'firework display',
            'q12' => 'd',
            'q13' => 'b',
            'q14' => 'd',
            'q15' => '2',
            'q16' => '6',
            'q17' => '1',
            'q18' => '4',
            'q19' => '3',
            'q20' => '5',
            'q21' => 'FALSE',
            'q22' => 'TRUE',
            'q23' => 'NOT GIVEN',
            'q24' => 'NOT GIVEN',
            'q25' => 'medical certificate',
            'q26' => ['one calendar month', '1 calendar month'],
            'q27' => 'gross professional misconduct',
            'q28' => 'a',
            'q29' => 'b',
            'q30' => 'c',
            'q31' => 'd',
            'q32' => 'c',
            'q33' => 'D',
            'q34' => 'E',
            'q35' => 'A',
            'q36' => 'G',
            'q37' => 'C',
            'q38' => 'mother tongue',
            'q39' => 'lingua franca',
            'q40' => 'vacuum cleaner',
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

                if(in_array($key, ['q7', 'q8', 'q9', 'q10', 'q11', 'q25', 'q26', 'q27', 'q38', 'q39', 'q40'])) {
                    $get_array[$key] = strtolower($get_array[$key]);
                }

                if(is_array($value)) {
                    if(in_array($get_array[$key], $value)) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                } else {
                    if($get_array[$key] == $value) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
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
