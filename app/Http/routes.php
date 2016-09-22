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


/**
 * Роутинг блога
 * */
Route::get('/post', ['as'=> 'blog', 'uses'=>'PostController@index']);

Route::get('/posts/{slug}', ['as'=> 'get-post', 'uses'=>'PostController@getPost']);


/**
 * Роутинг to do листа
 *
 * */

Route::get('/todo', ['as'=> 'todo', 'uses'=>'TodoController@index']);
Route::get('/todo/show/{id}', ['as'=> 'todo-show', 'uses'=>'TodoController@show']);
Route::post('/todo/close_task/', ['as'=> 'close_task', 'uses'=>'TodoController@close_task']);



/**
 * Роутинг фотографий
 *
 * */
Route::get('/', ['as'=> 'queryfixer', 'uses'=>'PhotoManagerController@index']);

Route::get('/photo_add', ['as'=> 'photo_add', 'uses'=>'PhotoManagerController@photo_add']);

Route::post('/photo/create', ['as'=> 'photo.create', 'uses'=>'PhotoManagerController@create']);


//$router->resources('Queryfixer','photoManagerController');

Route::auth();

Route::get('/home', 'HomeController@index');
