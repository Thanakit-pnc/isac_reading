<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Route;

class IELTSController extends Controller
{
    public function index($group = '') {

        $views = File::allFiles(resource_path('views/ielts'));

        $exams = array();

        $length = 5;
        $group_num = 1;

        foreach($views as $key => $view) {
            $fileName = substr($view->getFilename(), 0, -10);
            $fileNameFormat = str_replace('-', ' ', $fileName);
        
            if($fileNameFormat !== 'index') {

                $exams['group-'.$group_num][$key] = ucwords($fileNameFormat);

                if(count($exams['group-'.$group_num]) == $length) {
                    $exams['group-'.$group_num++][$key] = ucwords($fileNameFormat);
                } 

            } 
            
        }
 
        return view('ielts.index', ['exams' => $exams[$group]]);
    }

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

    // Comic strips
    public function exam_five($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.comic-strips', compact('timer'));
    }
    public function store_exam_five(Request $request) {

        $answers = array(
            'q1' => 'C',
            'q2' => 'B',
            'q3' => 'B',
            'q4' => 'A',
            'q5' => 'D',
            'q6' => 'G',
            'q7' => 'B',
            'q8' => 'A',
            'q9' => 'F',
            'q10' => 'C',
            'q11' => 'B',
            'q12' => 'A',
            'q13' => 'C',
            'q14' => 'G',
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

    // Diamonds
    public function exam_six($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.diamonds', compact('timer'));
    }
    public function store_exam_six(Request $request) {

        $answers = array(
            'q1' => 'A',
            'q2' => 'C',
            'q3' => 'C',
            'q4' => 'D',
            'q5' => 'A',
            'q6' => 'E',
            'q7' => 'C',
            'q8' => 'A',
            'q9' => 'F',
            'q10' => 'B',
            'q11' => 'one carob seed',
            'q12' => 'the metric system',
            'q13' => 'pearls',
            'q14' => 'points',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

    // Dubai
    public function exam_seven($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.dubai', compact('timer'));
    }
    public function store_exam_seven(Request $request) {

        $answers = array(
            'q1' => 'D',
            'q2' => 'C',
            'q3' => 'B',
            'q4' => 'B',
            'q5' => 'A',
            'q6' => 'H',
            'q7' => 'B', 
            'q8' => 'F',
            'q9' => 'C',
            'q10' => 'D',
            'q11' => 'F',
            'q12' => 'A',
            'q13' => 'H',
            'q14' => 'C',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

    // Face blindness
    public function exam_eight($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.face-blindness', compact('timer'));
    }
    public function store_exam_eight(Request $request) {

        $answers = array(
            'q1' => 'FALSE',
            'q2' => 'TRUE',
            'q3' => 'FALSE',
            'q4' => 'TRUE',
            'q5' => 'NOT GIVEN',
            'q6' => 'B',
            'q7' => 'B',
            'q8' => 'A',
            'q9' => 'C',
            'q10' => 'A',
            'q11' => 'piecemeal',
            'q12' => 'unitary',
            'q13' => 'prosoamnesia'
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

    // A meal to die for
    public function exam_nine($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.a-meal-to-die-for', compact('timer'));
    }
    public function store_exam_nine(Request $request) {

        $answers = array(
            'q1' => 'NOT GIVEN',
            'q2' => 'FALSE',
            'q3' => 'FALSE',
            'q4' => 'TRUE',
            'q5' => 'NOT GIVEN',
            'q6' => 'A',
            'q7' => 'B',
            'q8' => 'B',
            'q9' => 'C',
            'q10' => 'A',
            'q11' => 'A',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

    // Cloning
    public function exam_ten($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.cloning', compact('timer'));
    }
    public function store_exam_ten(Request $request) {

        $answers = array(
            'q1' => 'D',
            'q2' => 'D',
            'q3' => 'C',
            'q4' => 'C',
            'q5' => 'B',
            'q6' => 'NOT GIVEN',
            'q7' => 'FALSE',
            'q8' => 'NOT GIVEN',
            'q9' => 'FALSE',
            'q10' => 'TRUE',
            'q11' => 'NOT GIVEN',
            'q12' => 'In-vitro',
            'q13' => 'Petri dish',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

    // Coping with Change
    public function exam_eleven($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.coping-with-change', compact('timer'));
    }
    public function store_exam_eleven(Request $request) {

        $answers = array(
            'q1' => 'H',
            'q2' => 'E',
            'q3' => 'B',
            'q4' => 'G',
            'q5' => 'D',
            'q6' => 'C',
            'q7' => 'F',
            'q8' => 'TRUE',
            'q9' => 'TRUE',
            'q10' => 'FALSE',
            'q11' => 'NOT GIVEN',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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
    
    // Hot air balloon
    public function exam_twelve($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.hot-air-balloon', compact('timer'));
    }
    public function store_exam_twelve(Request $request) {

        $answers = array(
            'q1' => 'D',
            'q2' => 'A',
            'q3' => 'B',
            'q4' => 'D',
            'q5' => 'B',
            'q6' => 'D',
            'q7' => 'G',
            'q8' => 'E',
            'q9' => 'I',
            'q10' => 'B',
            'q11' => 'C',
            'q12' => 'E',
            'q13' => 'G',
            'q14' => 'F',
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

     // Insects as food
     public function exam_thirteen($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.insects-as-food', compact('timer'));
    }
    public function store_exam_thirteen(Request $request) {

        $answers = array(
            'q1' => 'TRUE',
            'q2' => 'FALSE',
            'q3' => 'NOT GIVEN',
            'q4' => 'NOT GIVEN',
            'q5' => 'FALSE',
            'q6' => 'A',
            'q7' => 'C',
            'q8' => 'B',
            'q9' => 'C',
            'q10' => 'A',
            'q11' => 'C',
            'q12' => 'B',
            'q13' => 'A'
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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

     // The wealth of happiness
     public function exam_fourteen($mode) {
        
        if($mode == 'T') {
            $timer = 1;
        } else {
            $timer = 0;
        }

        return view('ielts.the-wealth-of-happiness', compact('timer'));
    }
    public function store_exam_fourteen(Request $request) {

        $answers = array(
            'q1' => 'NOT GIVEN',
            'q2' => 'FALSE',
            'q3' => 'TRUE',
            'q4' => 'TRUE',
            'q5' => 'TRUE',
            'q6' => 'D',
            'q7' => 'C',
            'q8' => 'B',
            'q9' => 'A',
            'q10' => 'C',
            'q11' => 'induced',
            'q12' => 'philosophers',
            'q13' => 'parcels'
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
                    if(strtolower($get_array[$key]) == strtolower($answer)) {
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
