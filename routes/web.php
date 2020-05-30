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

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('fullcalendar', 'AttendanceController@index')->name('fullcalendar');
    Route::post('create-attendance', 'AttendanceController@store');

    //fullcalender

    Route::get('/fullcalendareventmaster', 'FullCalendarEventMasterController@index')->name('fullcalendareventmaster');

    Route::post('/fullcalendareventmaster/create', 'FullCalendarEventMasterController@create');

    Route::post('/fullcalendareventmaster/update', 'FullCalendarEventMasterController@update');

    Route::post('/fullcalendareventmaster/delete', 'FullCalendarEventMasterController@destroy');



  

});

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/calendar', 'CalendarController@index')->name('calendar');
Route::get('/applicationForm', 'ApplicationFormController@index')->name('applicationForm');

//test
Route::get('/applicationNew', 'ApplicationFormController@new')->name('applicationNew');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/reports', 'ReportController@index')->name('report');

Route::get('/test', 'JqueryController@index')->name('test');

Route::post('/applicationForm/send', 'ApplicationFormController@send');

Route::post('/applicationNew/send', 'ApplicationFormController@send');

//Login
Route::get('loginPage', 'Auth\LoginController@showLoginForm')->name('loginPage');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/**
 * Register Route(s)
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('{path}', 'HomeController@dashboard')->where('path', '^(?!api\/)[\/\w\.-]*');
