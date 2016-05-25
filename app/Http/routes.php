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

Route::get('/', 'BookingController@index');
Route::resource('events', 'BookingController');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('admin', 'AdminController@index');
Route::resource('projects', 'ProjectController');

Route::get('api/todo', ['uses' => 'TodoController@index','middleware'=>'simpleauth']);
Route::post('api/todo', ['uses' => 'TodoController@store','middleware'=>'simpleauth']);
Route::delete('api/todo/{id}', ['uses' => 'TodoController@delete','middleware'=>'simpleauth']);
Route::put('api/todo/{id}', ['uses' => 'TodoController@update','middleware'=>'simpleauth']);


Route::resource('api/pool','PoolsController');
Route::resource('api/pooloption','PoolOptionsController');
Route::get('api/pooloption/addvote/{id}','PoolOptionsController@addVote');
