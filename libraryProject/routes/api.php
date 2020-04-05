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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});


Route::post('/user/login', 'UserController@login');
Route::post('/user/register', 'UserController@register');
Route::get('/user', 'UserController@user');

Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('mySubjects', 'SubjectUserController@index');
    Route::post('mySubject', 'SubjectUserController@store');
    Route::get('mySubject/{id}', 'SubjectUserController@show');
    Route::delete('mySubject/{id}', 'SubjectUserController@destroy');
    Route::get('/user', 'UserController@user');
});



//Subjects
//List subjects
Route::get('subjects', 'SubjectController@index');
//List single subject
//Route::get('subject/{name}', 'SubjectController@show');

//Create new subject
Route::post('subject', 'SubjectController@store');

//Update new subject
//Route::put('subject', 'SubjectController@store');

//Delete subject
Route::delete('subject/{id}', 'SubjectController@destroy');

//List subject by word
Route::get('subject/{name}', 'SubjectController@search');