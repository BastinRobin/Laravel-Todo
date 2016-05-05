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


/**
 *
 * THis is a GET request to homepage . So when ever a request is done to / url this view
 * function will return the file resources/views/welcome.blade.php.
 */

/**

	'/' -> GET(REQUEST) -> Basic Homepage route(view)

	'/login' -> GET(REQUEST) -> Returns simple login page(view)
	'/login' -> POST(REQUEST) -> Check if user exists and authenticated and redirect to accounts page(AUTH)
	'/signup' -> GET(REQUEST) -> Returns signup page(view)
	'/signup' -> POST(REQUEST) -> Create a new user and send him to account page(AUTH)
	'/logout' -> GET(REQUEST) -> Destroy Auth session and redirect to login or homepage


	'/todo' -> GET(REQUEST) -> Show all todo for logged in user
	'/todo' -> POST(REQUEST) -> Create new todo item 
	'/todo' -> PUT(REQUEST) -> To update a item in todo list
	'/todo' -> DELETE(REQUEST) -> To remove the item
 */

Route::get('/', ['as' => 'get_home', 'uses' => 'TodoController@get_home']);

Route::get('/login', ['as' => 'get_login', 'uses' => 'TodoController@get_login']);
Route::post('/login', ['as' => 'post_login', 'uses' => 'TodoController@post_login']);

Route::get('/signup', ['as' => 'get_signup', 'uses' => 'TodoController@get_signup']);
Route::post('/signup', ['as' => 'post_signup', 'uses' => 'TodoController@post_signup']);

Route::get('/account', ['as' => 'get_account', 'uses' => 'TodoController@get_account']);
Route::post('/account', ['as' => 'post_account', 'uses' => 'TodoController@post_account']);


Route::get('/logout', ['as' => 'get_logout', 'uses' => 'TodoController@get_logout']);
