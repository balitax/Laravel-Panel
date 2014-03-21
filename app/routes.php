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

// GET ROUTE
Route::get('login','UserController@index');
Route::get('user/add','UserController@add_user');
Route::get('dashboard',array('before' => 'auth',function(){
	$data['title'] = 'Dashboard Administrator';
	return View::make('panel/dashboard',$data);
}));
Route::get('logout','UserController@logout');


//POST ROUTE
Route::post('user/save','UserController@create');
Route::post('auth','UserController@auth');
