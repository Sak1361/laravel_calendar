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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/holiday', 'CalendarController@getHoliday');
    Route::post('/holiday', 'CalendarController@postHoliday');
    Route::delete('/holiday', 'CalendarController@deleteHoliday');
    Route::get('/holiday/{id}', 'CalendarController@getHolidayId');
    Route::get('/', 'CalendarController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/', function () {
    return view('auth.login');
});
*/
