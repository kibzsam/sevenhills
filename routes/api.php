<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('saveattendance','AttendanceController@saveattendance');
Route::get('getusers','UsersController@getusers');
Route::get('getattendance','AttendanceController@getattendance');
Route::delete('deleteattendance/{id}','AttendanceController@deleteattendance');
Route::put('updateattendance/{id}','AttendanceController@updateattendance');
