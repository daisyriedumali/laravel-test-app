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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('/todo', 'TodoController@getTodoList');

	Route::get('/add', 'TodoController@getAddTodo');

	Route::post('/addTodo', 'TodoController@postAddTodo');

	Route::get('/edit/{todoID}', 'TodoController@getEditTodo');

	Route::post('/editTodo', 'TodoController@postEditTodo');

	Route::post('/deleteTodo', 'TodoController@postDeleteTodo');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);