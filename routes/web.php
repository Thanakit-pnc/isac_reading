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

Route::middleware(['auth:student'])->group(function () {
    Route::get('/home', 'HomeController@index');
    Route::prefix('GE')->group(function () {
       Route::get('{level?}', 'GeneralController@chooseLevel');
    });
    Route::get('pdf/{level?}/{file?}', 'HomeController@pdf');

    // IELTS Exam
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
});

