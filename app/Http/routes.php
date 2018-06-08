<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Student;
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']],function(){
	Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
	Route::post('/handleLogin',['as'=>'handleLogin','uses'=>'AuthController@handleLogin']);
	Route::get('/import',['middleware'=>'auth','as'=>'import','uses'=>'UsersController@import']);
	Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);
	Route::resource('users','UsersController',['only'=>['create','store']]);
	Route::get('/importExport',['middleware'=>'auth','as'=>'importExport','uses'=>'AuthController@importExport']);
	Route::post('/importExcel',['middleware'=>'auth','as'=>'importExcel','uses'=>'AuthController@importExcel']);
	Route::get('/getdata',['middleware'=>'auth','as'=>'getdata','uses'=>'results@getdata']);
	Route::post('/fetch',['middleware'=>'auth','as'=>'fetch','uses'=>'results@fetch']);
	Route::get('/getPDF',['middleware'=>'auth','as'=>'getPDF','uses'=>'PDFController@getPDF']);
});


