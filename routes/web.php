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
});
