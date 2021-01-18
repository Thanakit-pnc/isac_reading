<?php

namespace App\Http\Controllers\IELTSTests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    public function academic() {
        
        $type = 'Academic';
        
        $practices = [
            '1' => "Academic Test 1",
            '2' => "Academic Test 2",
            '3' => "Academic Test 3",
            '4' => "Academic Test 4",
            '5' => "Academic Test 5",
        ];

        $no_highlight = 'no';

        return view('ielts_tests.index', compact('practices', 'type', 'no_highlight'));
    }

    // Test01
    public function academic_test_01($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test1.index', compact('timer'));
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

    // Test02
    public function academic_test_02($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test2.index', compact('timer'));
    }

    public function ac_test_02(Request $request) {

        $answers = [
            'q1' => 'd',
            'q2' => 'b',
            'q3' => 'c',
            'q4' => 'c',
            'q5' => 'a',
            'q6' => 'G',
            'q7' => 'F',
            'q8' => 'A',
            'q9' => 'D',
            'q10' => 'C',
            'q11' => 'd',
            'q12' => 'h',
            'q13' => 'a',
            'q14' => 'b',
            'q15' => 'FALSE',
            'q16' => 'FALSE',
            'q17' => 'NOT GIVEN',
            'q18' => 'TRUE',
            'q19' => 'NOT GIVEN',
            'q20' => 'D',
            'q21' => 'A',
            'q22' => 'C',
            'q23' => 'B',
            'q24' => 'B',
            'q25' => 'd',
            'q26' => 'c',
            'q27' => 'a',
            'q28' => 'FALSE',
            'q29' => 'TRUE',
            'q30' => 'TRUE',
            'q31' => 'NOT GIVEN',
            'q32' => 'NOT GIVEN',
            'q33' => 'D',
            'q34' => 'B',
            'q35' => 'C',
            'q36' => 'A',
            'q37' => 'C',
            'q38' => 'd',
            'q39' => 'c',
            'q40' => 'a',
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

    // Test03
    public function academic_test_03($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test3.index', compact('timer'));
    }

    public function ac_test_03(Request $request) {

        $answers = [
            'q1' => 'c',
            'q2' => 'b',
            'q3' => 'b',
            'q4' => 'a',
            'q5' => 'd',
            'q6' => 'G',
            'q7' => 'B',
            'q8' => 'A',
            'q9' => 'F',
            'q10' => 'C',
            'q11' => 'b',
            'q12' => 'a',
            'q13' => 'c',
            'q14' => 'g',
            'q15' => 'FALSE',
            'q16' => 'TRUE',
            'q17' => 'FALSE',
            'q18' => 'TRUE',
            'q19' => 'NOT GIVEN',
            'q20' => 'B',
            'q21' => 'B',
            'q22' => 'A',
            'q23' => 'C',
            'q24' => 'A',
            'q25' => 'piecemeal',
            'q26' => 'unitary',
            'q27' => 'prosoamnesia',
            'q28' => 'NOT GIVEN',
            'q29' => 'FALSE',
            'q30' => 'FALSE',
            'q31' => 'TRUE',
            'q32' => 'NOT GIVEN',
            'q33' => 'A',
            'q34' => 'B',
            'q35' => 'B',
            'q36' => 'C',
            'q37' => 'A',
            'q38' => 'a',
            'q39' => 'c',
            'q40' => 'b',
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

                if(in_array($key ,['q25', 'q26', 'q27'])) {
                    $get_array[$key] = strtolower(trim($get_array[$key]));
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

    // Test04
    public function academic_test_04($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test4.index', compact('timer'));
    }

    public function ac_test_04(Request $request) {

        $answers = [
            'q1' => 'a',
            'q2' => 'c',
            'q3' => 'c',
            'q4' => 'd',
            'q5' => 'a',
            'q6' => 'E',
            'q7' => 'C',
            'q8' => 'A',
            'q9' => 'F',
            'q10' => 'B',
            'q11' => 'one carob seed',
            'q12' => 'the metric system',
            'q13' => 'pearls',
            'q14' => 'points',
            'q15' => 'NOT GIVEN',
            'q16' => 'FALSE',
            'q17' => 'TRUE',
            'q18' => 'TRUE',
            'q19' => 'TRUE',
            'q20' => 'd',
            'q21' => 'c',
            'q22' => 'b',
            'q23' => 'a',
            'q24' => 'c',
            'q25' => 'induced',
            'q26' => 'philosophers',
            'q27' => 'parcels',
            'q28' => 'TRUE',
            'q29' => 'TRUE',
            'q30' => 'FALSE',
            'q31' => 'TRUE',
            'q32' => 'NOT GIVEN',
            'q33' => 'd',
            'q34' => 'c',
            'q35' => 'a',
            'q36' => 'a',
            'q37' => 'b',
            'q38' => 'entomophagy',
            'q39' => 'ground',
            'q40' => '20%',
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

                if(in_array($key ,['q11', 'q12', 'q13', 'q14', 'q25', 'q26', 'q27', 'q38', 'q39', 'q40'])) {
                    $get_array[$key] = strtolower(trim($get_array[$key]));
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

    // Test05
    public function academic_test_05($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.academic.test5.index', compact('timer'));
    }

    public function ac_test_05(Request $request) {

        $answers = [
            'q1' => 'd',
            'q2' => 'c',
            'q3' => 'b',
            'q4' => 'b',
            'q5' => 'a',
            'q6' => 'H',
            'q7' => 'B',
            'q8' => 'F',
            'q9' => 'C',
            'q10' => 'D',
            'q11' => 'f',
            'q12' => 'a',
            'q13' => 'h',
            'q14' => 'c',
            'q15' => 'TRUE',
            'q16' => 'FALSE',
            'q17' => 'NOT GIVEN',
            'q18' => 'NOT GIVEN',
            'q19' => 'FALSE',
            'q20' => 'A',
            'q21' => 'C',
            'q22' => 'B',
            'q23' => 'C',
            'q24' => 'A',
            'q25' => 'c',
            'q26' => 'b',
            'q27' => 'a',
            'q28' => 'TRUE',
            'q29' => 'NOT GIVEN',
            'q30' => 'FALSE',
            'q31' => 'TRUE',
            'q32' => 'NOT GIVEN',
            'q33' => 'd',
            'q34' => 'd',
            'q35' => 'c',
            'q36' => 'a',
            'q37' => 'synesthetes',
            'q38' => 'misnomer',
            'q39' => 'inducer',
            'q40' => 'metaphors',
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

                if(in_array($key ,['q37', 'q38', 'q39', 'q40'])) {
                    $get_array[$key] = strtolower(trim($get_array[$key]));
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
