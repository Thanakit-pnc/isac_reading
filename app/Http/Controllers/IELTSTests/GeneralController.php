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

        $no_highlight = 'no';
        
        return view('ielts_tests.index', compact('practices', 'type', 'no_highlight'));
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

    // Test02
    public function general_test_02($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.general.test02.index', compact('timer'));
    }

    public function gt_test_02(Request $request) {

        $answers = [
            'q1' => 'C',
            'q2' => 'D',
            'q3' => 'A',
            'q4' => 'D',
            'q5' => 'B',
            'q6' => 'C',
            'q7' => 'h',
            'q8' => 'c',
            'q9' => 'e',
            'q10' => 'f',
            'q11' => 'g',
            'q12' => 'd',
            'q13' => 'd',
            'q14' => 'h',
            'q15' => 'NOT GIVEN',
            'q16' => 'NOT GIVEN',
            'q17' => 'TRUE',
            'q18' => 'FALSE',
            'q19' => 'FALSE',
            'q20' => 'TRUE',
            'q21' => 'NOT GIVEN',
            'q22' => ['$100', '100 dollars', 'hundred dollars'],
            'q23' => ['Every 15 minutes', 'Every fifteen minutes'],
            'q24' => ['10 metres', '10 m'],
            'q25' => ['10.00 am', '10 am', '10 a.m.'],
            'q26' => ['Midnight', '12 am', '12 a.m.'],
            'q27' => ['Sixth', '6th'],
            'q28' => 'b',
            'q29' => 'c',
            'q30' => 'c',
            'q31' => 'c',
            'q32' => 'b',
            'q33' => 'B',
            'q34' => 'J',
            'q35' => 'H',
            'q36' => 'F',
            'q37' => 'G',
            'q38' => 'e',
            'q39' => 'h',
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

                if(in_array($key, ['q22', 'q23', 'q24', 'q25', 'q26', 'q27'])) {
                    $get_array[$key] = strtolower($get_array[$key]);
                }

                if(is_array($value)) {
                    $arrToLower = collect($value)->map(function ($word) {
                        return strtolower($word);
                    });

                    if(in_array($get_array[$key], $arrToLower->toArray())) {
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
                $results['exam'][$key] = ['stdAnswer' => $get_array[$key], 'status' => $status, 'rightAnswer' => is_array($answers[$key]) ? $answers[$key][0] : $answers[$key]];
            }
        } catch(Exception $e) {
            return response()->json(['message' => $e->getMessage().' : '.'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // Test03
    public function general_test_03($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.general.test03.index', compact('timer'));
    }

    public function gt_test_03(Request $request) {

        $answers = [
            'q1' => 'f',
            'q2' => 'b',
            'q3' => 'c',
            'q4' => 'a',
            'q5' => 'e',
            'q6' => 'd',
            'q7' => ['1.00 am', '10 am'],
            'q8' => ['$15', 'fifteen dollars'],
            'q9' => ['3', 'three'],
            'q10' => '10 years old',
            'q11' => ['9.00 pm', '9 pm'],
            'q12' => 'TRUE',
            'q13' => 'TRUE',
            'q14' => 'NOT GIVEN',
            'q15' => '1',
            'q16' => '2',
            'q17' => '6',
            'q18' => '4',
            'q19' => '5',
            'q20' => '3',
            'q21' => 'TRUE',
            'q22' => 'NOT GIVEN',
            'q23' => 'TRUE',
            'q24' => 'FALSE',
            'q25' => 'NOT GIVEN',
            'q26' => ['evening', 'evenings'],
            'q27' => ['waitress', 'waiter'],
            'q28' => 'FALSE',
            'q29' => 'TRUE',
            'q30' => 'NOT GIVEN',
            'q31' => 'TRUE',
            'q32' => 'NOT GIVEN',
            'q33' => ['15 million', '15 m', '15'],
            'q34' => ['1.6 million', '1.6 m', '1.6'],
            'q35' => '1690',
            'q36' => '1850s',
            'q37' => '60',
            'q38' => 'c',
            'q39' => 'a',
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

                if(in_array($key, ['q7', 'q8', 'q9', 'q11', 'q26', 'q27', 'q33', 'q34'])) {
                    $get_array[$key] = trim(strtolower($get_array[$key]));
                }

                if(is_array($value)) {
                    if(in_array($get_array[$key], $value)) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                    $get_array[$key] = trim(strtoupper($get_array[$key]));
                } else {
                    if(strcasecmp($get_array[$key], $value) == 0) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                }
                
                $results['total'] = "Your scores : ".$score.'/'.$total;
                $results['exam'][$key] = ['stdAnswer' => $get_array[$key], 'status' => $status, 'rightAnswer' => is_array($answers[$key]) ? $answers[$key][0] : $answers[$key]];
            }
        } catch(Exception $e) {
            return response()->json(['message' => $e->getMessage().' : '.'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // Test04
    public function general_test_04($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.general.test04.index', compact('timer'));
    }

    public function gt_test_04(Request $request) {

        $answers = [
            'q1' => 'B',
            'q2' => 'C',
            'q3' => 'A',
            'q4' => 'A',
            'q5' => 'A',
            'q6' => 'B',
            'q7' => 'C',
            'q8' => 'C',
            'q9' => 'B',
            'q10' => 'A',
            'q11' => 'B',
            'q12' => 'C',
            'q13' => 'C',
            'q14' => 'A',
            'q15' => 'NOT GIVEN',
            'q16' => 'TRUE',
            'q17' => 'FALSE',
            'q18' => 'TRUE',
            'q19' => 'FALSE',
            'q20' => 'NOT GIVEN',
            'q21' => 'FALSE',
            'q22' => ['49', 'forty-nine'],
            'q23' => '3.1',
            'q24' => ['9%', '9 percent'],
            'q25' => ['3', 'three'],
            'q26' => 'B',
            'q27' => 'C',
            'q28' => '120,000',
            'q29' => ['1mm', '1 millimetre', '1 millimeter'],
            'q30' => ['80 cm', '80 centimetres', '80 centimeters'],
            'q31' => ['2,000 metres', '2,000 meters', '2,000 m'],
            'q32' => '1950s',
            'q33' => 'b',
            'q34' => 'd',
            'q35' => 'b',
            'q36' => 'a',
            'q37' => 'c',
            'q38' => 'leeward side',
            'q39' => 'Amazon Basin',
            'q40' => 'inversion layer',
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

                if(in_array($key, ['q22', 'q24', 'q25', 'q29', 'q30', 'q31'])) {
                    $get_array[$key] = trim(strtolower($get_array[$key]));
                }

                if(is_array($value)) {
                    if(in_array($get_array[$key], $value)) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                    $get_array[$key] = trim(strtoupper($get_array[$key]));
                } else {
                    if(strcasecmp($get_array[$key], $value) == 0) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                }
                
                $results['total'] = "Your scores : ".$score.'/'.$total;
                $results['exam'][$key] = ['stdAnswer' => $get_array[$key], 'status' => $status, 'rightAnswer' => is_array($answers[$key]) ? $answers[$key][0] : $answers[$key]];
            }
        } catch(Exception $e) {
            return response()->json(['message' => $e->getMessage().' : '.'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }

    // Test05
    public function general_test_05($mode) {

        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts_tests.general.test05.index', compact('timer'));
    }

    public function gt_test_05(Request $request) {

        $answers = [
            'q1' => ['49,000 pounds', '49000 pounds', '49000', '49,000'],
            'q2' => 'children\'s orphanage',
            'q3' => '6.30 am',
            'q4' => 'T-shirt',
            'q5' => ['at checkpoints', 'checkpoints'],
            'q6' => ['all drinks', 'drinks'],
            'q7' => 'vii',
            'q8' => 'iv',
            'q9' => 'ix',
            'q10' => 'viii',
            'q11' => 'ii',
            'q12' => 'i',
            'q13' => 'v',
            'q14' => 'xi',
            'q15' => 'B',
            'q16' => 'D',
            'q17' => 'A',
            'q18' => 'B',
            'q19' => 'C',
            'q20' => 'C',
            'q21' => 'A',
            'q22' => 'A',
            'q23' => 'B',
            'q24' => 'B',
            'q25' => 'A',
            'q26' => 'B',
            'q27' => 'B',
            'q28' => 'TRUE',
            'q29' => 'FALSE',
            'q30' => 'NOT GIVEN',
            'q31' => 'FALSE',
            'q32' => 'FALSE',
            'q33' => 'a',
            'q34' => 'd',
            'q35' => 'd',
            'q36' => 'b',
            'q37' => 'c',
            'q38' => 'totem',
            'q39' => 'Ancestors',
            'q40' => 'blood of life',
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

                if(in_array($key, ['q1', 'q5', 'q6'])) {
                    $get_array[$key] = trim(strtolower($get_array[$key]));
                }

                if(is_array($value)) {
                    if(in_array($get_array[$key], $value)) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                    $get_array[$key] = trim(strtoupper($get_array[$key]));
                } else {
                    if(strcasecmp($get_array[$key], $value) == 0) {
                        $score++;
                        $status = 'R';
                    } else {
                        $status = 'W';
                    }
                }
                
                $results['total'] = "Your scores : ".$score.'/'.$total;
                $results['exam'][$key] = ['stdAnswer' => $get_array[$key], 'status' => $status, 'rightAnswer' => is_array($answers[$key]) ? $answers[$key][0] : $answers[$key]];
            }
        } catch(Exception $e) {
            return response()->json(['message' => $e->getMessage().' : '.'Something went wrong!!']);
        }

        return response()->json(['message' => 'success', 'results' => $results]);
    }
}
