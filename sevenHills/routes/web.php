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

Route::get('/', function () {
    return view('index');
});
//Route::get('/index', function () {
//    return view('index');
//});

Route::get('/jquery', function () {
    return view('jquerySteps');
});



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/calendar', 'CalendarController@index')->name('calendar');

Route::get('/applicationForm', 'ApplicationFormController@index')->name('applicationForm');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/reports', 'ReportController@index')->name('report');

Route::post('/applicationForm', function (\Illuminate\Http\Request $request){
    //
    Mail::send(new ContactMail($request));
    return redirect('/');
});