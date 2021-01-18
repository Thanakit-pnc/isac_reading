<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    if(Auth::guard('student')->check()) {
        return redirect('/home');
    } else {
        return redirect('login');
    }
});

Route::get('/login', 'LoginCustomController@showLoginForm');
Route::post('/login', 'LoginCustomController@login')->name('login');
Route::post('logout', 'LoginCustomController@logout')->name('logout');

Route::get('coming-soon', function() {
    return view('coming-soon');
});

Route::middleware(['auth:student'])->group(function () {
    Route::get('/home', 'HomeController@index');
    Route::prefix('GE')->group(function () {
       Route::get('{level?}', 'GeneralController@chooseLevel');
    });
    Route::get('pdf/{level?}/{file?}', 'HomeController@pdf');

    // IELTS Exam
    Route::get('ielts/{group}', 'IELTSController@index');

    Route::get('an-environmental-disaster/{mode}', 'IELTSController@exam_one');
    Route::post('store_exam_one', 'IELTSController@store_exam_one')->name('store.exam-one');

    Route::get('body-piercing/{mode}', 'IELTSController@exam_two');
    Route::post('store_exam_two', 'IELTSController@store_exam_two')->name('store.exam-two');

    Route::get('how-animals-communicate/{mode}', 'IELTSController@exam_three');
    Route::post('store_exam_three', 'IELTSController@store_exam_three')->name('store.exam-three');

    Route::get('the-mysterious-kris/{mode}', 'IELTSController@exam_four');
    Route::post('store_exam_four', 'IELTSController@store_exam_four')->name('store.exam-four');

    Route::get('comic-strips/{mode}', 'IELTSController@exam_five');
    Route::post('store_exam_five', 'IELTSController@store_exam_five')->name('store.exam-five');

    Route::get('diamonds/{mode}', 'IELTSController@exam_six');
    Route::post('store_exam_six', 'IELTSController@store_exam_six')->name('store.exam-six');

    Route::get('dubai/{mode}', 'IELTSController@exam_seven');
    Route::post('store_exam_seven', 'IELTSController@store_exam_seven')->name('store.exam-seven');

    Route::get('face-blindness/{mode}', 'IELTSController@exam_eight');
    Route::post('store_exam_eight', 'IELTSController@store_exam_eight')->name('store.exam-eight');

    Route::get('a-meal-to-die-for/{mode}', 'IELTSController@exam_nine');
    Route::post('store_exam_nine', 'IELTSController@store_exam_nine')->name('store.exam-nine');

    Route::get('cloning/{mode}', 'IELTSController@exam_ten');
    Route::post('store_exam_ten', 'IELTSController@store_exam_ten')->name('store.exam-ten');

    Route::get('coping-with-change/{mode}', 'IELTSController@exam_eleven');
    Route::post('store_exam_eleven', 'IELTSController@store_exam_eleven')->name('store.exam-eleven');

    Route::get('hot-air-balloon/{mode}', 'IELTSController@exam_twelve');
    Route::post('store_exam_twelve', 'IELTSController@store_exam_twelve')->name('store.exam-twelve');

    Route::get('insects-as-food/{mode}', 'IELTSController@exam_thirteen');
    Route::post('store_exam_thirteen', 'IELTSController@store_exam_thirteen')->name('store.exam-thirteen');

    Route::get('the-wealth-of-happiness/{mode}', 'IELTSController@exam_fourteen');
    Route::post('store_exam_fourteen', 'IELTSController@store_exam_fourteen')->name('store.exam-fourteen');

    Route::get('lets-go-fly-a-kite/{mode}', 'IELTSController@exam_fifteen');
    Route::post('store_exam_fifteen', 'IELTSController@store_exam_fifteen')->name('store.exam-fifteen');

    Route::get('lijiang/{mode}', 'IELTSController@exam_sixteen');
    Route::post('store_exam_sixteen', 'IELTSController@store_exam_sixteen')->name('store.exam-sixteen');

    Route::get('mulus-mighty-mountain/{mode}', 'IELTSController@exam_seventeen');
    Route::post('store_exam_seventeen', 'IELTSController@store_exam_seventeen')->name('store.exam-seventeen');

    Route::get('north-sulawesi/{mode}', 'IELTSController@exam_eighteen');
    Route::post('store_exam_eighteen', 'IELTSController@store_exam_eighteen')->name('store.exam-eighteen');

    Route::get('whats-on-the-menu-for-british-diners/{mode}', 'IELTSController@exam_nineteen');
    Route::post('store_exam_nineteen', 'IELTSController@store_exam_nineteen')->name('store.exam-nineteen');

    Route::get('shadow-plays/{mode}', 'IELTSController@exam_twenty');
    Route::post('store_exam_twenty', 'IELTSController@store_exam_twenty')->name('store.exam-twenty');

    Route::get('shield-maker/{mode}', 'IELTSController@exam_twentyone');
    Route::post('store_exam_twentyone', 'IELTSController@store_exam_twentyone')->name('store.exam-twentyone');

    Route::get('sniffer-dogs/{mode}', 'IELTSController@exam_twentytwo');
    Route::post('store_exam_twentytwo', 'IELTSController@store_exam_twentytwo')->name('store.exam-twentytwo');

    Route::get('stone-fortness-of-brunei/{mode}', 'IELTSController@exam_twentythree');
    Route::post('store_exam_twentythree', 'IELTSController@store_exam_twentythree')->name('store.exam-twentythree');

    Route::get('synesthesia/{mode}', 'IELTSController@exam_twentyfour');
    Route::post('store_exam_twentyfour', 'IELTSController@store_exam_twentyfour')->name('store.exam-twentyfour');


    // IELTS Tests
    Route::prefix('')->namespace('IELTSTests')->group(function () {

        // Academic
        Route::get('/academic', 'AcademicController@academic');
        Route::get('academic-test-1/{mode}', 'AcademicController@academic_test_01');
        Route::post('ac_test_01', 'AcademicController@ac_test_01')->name('store.ac-test-01');

        Route::get('academic-test-2/{mode}', 'AcademicController@academic_test_02');
        Route::post('ac_test_02', 'AcademicController@ac_test_02')->name('store.ac-test-02');

        Route::get('academic-test-3/{mode}', 'AcademicController@academic_test_03');
        Route::post('ac_test_03', 'AcademicController@ac_test_03')->name('store.ac-test-03');

        Route::get('academic-test-4/{mode}', 'AcademicController@academic_test_04');
        Route::post('ac_test_04', 'AcademicController@ac_test_04')->name('store.ac-test-04');

        Route::get('academic-test-5/{mode}', 'AcademicController@academic_test_05');
        Route::post('ac_test_05', 'AcademicController@ac_test_05')->name('store.ac-test-05');

        // General Training
        Route::get('/general-training', 'GeneralController@general');
        Route::get('general-training-test-1/{mode}', 'GeneralController@general_test_01');
        Route::post('gt_test_01', 'GeneralController@gt_test_01')->name('store.gt-test-01');

        Route::get('general-training-test-2/{mode}', 'GeneralController@general_test_02');
        Route::post('gt_test_02', 'GeneralController@gt_test_02')->name('store.gt-test-02');

        Route::get('general-training-test-3/{mode}', 'GeneralController@general_test_03');
        Route::post('gt_test_03', 'GeneralController@gt_test_03')->name('store.gt-test-03');

        Route::get('general-training-test-4/{mode}', 'GeneralController@general_test_04');
        Route::post('gt_test_04', 'GeneralController@gt_test_04')->name('store.gt-test-04');

        Route::get('general-training-test-5/{mode}', 'GeneralController@general_test_05');
        Route::post('gt_test_05', 'GeneralController@gt_test_05')->name('store.gt-test-05');
    });
    
});

