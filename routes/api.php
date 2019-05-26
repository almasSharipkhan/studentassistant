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

//Auth
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');

Route::middleware('auth:api')->post('/events', 'EventController@eventGo');

Route::middleware('auth:api')->get('/details', 'UserController@detail');

Route::get('/teacher_schedule', 'ScheduleController@getTeacherById');

Route::middleware('auth:api')->get('/user_reminders', 'UserController@userReminders');