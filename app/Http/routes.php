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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as'=> 'queryfixer', 'uses'=>'photoManagerController@index']);

Route::get('/photo_add', ['as'=> 'photo_add', 'uses'=>'photoManagerController@photo_add']);
//Route::get('/', 'photoManagerController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
