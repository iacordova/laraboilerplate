<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('user', 'UserController');

Route::resource('session', 'SessionController');
Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');

Route::get('main', 'MainController@index')->before('auth');