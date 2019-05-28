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

//User

Route::middleware('auth:api')->post('/events', 'EventController@eventGo');

Route::middleware('auth:api')->get('/details', 'UserController@detail');

Route::middleware('auth:api')->get('/user_reminders', 'UserController@userReminders');

Route::middleware('auth:api')->post('/user_dean_ask', 'UserController@deanAsk');

//Schedule

Route::get('/schedule_group', 'ScheduleController@getScheduleByGroupId');

Route::get('/schedule_room', 'ScheduleController@getScheduleByRoomId');

Route::get('/schedule_free_rooms', 'ScheduleController@getFreeRoomsSchedulesByRoomDate');

Route::get('/teacher_schedule', 'ScheduleController@getTeacherByUserId');

Route::get('/speciality_schedule', 'ScheduleController@specialities');

Route::middleware('auth:api')->post('/reserve_room', 'ScheduleController@reserveRoom');