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
	return View::make('sites/index');
});

// GET ROUTE
Route::get('login','UserController@index');
Route::get('user/add','UserController@add_user');
Route::get('dashboard',array('before' => 'auth',function(){
	$data['title'] = 'Dashboard Administrator';
	return View::make('panel/dashboard',$data);
}));
Route::get('logout','UserController@logout');
Route::get('dashboard/pages/add',function(){
	$data['title'] = 'Add Pages - Dashboard Administrator';
	return View::make('panel/pages_add',$data);
});
Route::get('dashboard/pages',function(){

	$pages = Pages::all();
	$data['title'] 	= 'List Pages - Dashboard Administrator';
	$data['pages']	= $pages;
	$data['no']		= 1;

	return View::make('panel/pages',$data);
});
Route::get('dashboard/pages/edit/{id}','PagesController@edit');
Route::get('dashboard/pages/del/{id}','PagesController@delete');

//POST ROUTE
Route::post('user/save','UserController@create');
Route::post('auth','UserController@auth');
Route::post('dashboard/pages/save','PagesController@create');
Route::post('dashboard/pages/update/{id}','PagesController@update');
