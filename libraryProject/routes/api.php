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

//My Subjects
//List subjects
Route::get('mySubjects', 'SubjectUserController@index')->middleware('auth');

//List single subject
Route::get('mySubject/{id}', 'SubjectUserController@show');

//Delete subject
Route::delete('mySubject/{id}', 'SubjectUserController@destroy');

//Subjects
//List subjects
Route::get('subjects', 'SubjectController@index');

//List single subject
Route::get('subject/{year}', 'SubjectController@show');

//Create new subject
Route::post('subject', 'SubjectController@store');

//Update new subject
//Route::put('subject', 'SubjectController@store');

//Delete subject
Route::delete('subject/{id}', 'SubjectController@destroy');
