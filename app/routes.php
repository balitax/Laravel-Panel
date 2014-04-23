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

// GET ROUTE //
Route::get('login','UserController@index');

Route::get('user/add','UserController@add_user');

Route::get('dashboard',array('before' => 'auth',function(){

	$j_blog 			= DB::table('blog')->get();
	$jumlah_blog 		= count($j_blog);
	$j_pages 			= DB::table('pages')->get();
	$jumlah_pages		= count($j_pages);


	$data['title'] 		= 'Dashboard Administrator';
	$data['j_blog']		= $jumlah_blog;
	$data['j_pages']	= $jumlah_pages;


	return View::make('panel/dashboard',$data);

}));

Route::get('logout','UserController@logout');

// Pages
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

// Blog
Route::get('dashboard/blog',function(){

	$blog = Blog::all();
	$data['title'] 		= 'Blog List - Dashboard Administrator';
	$data['blog']		= $blog;
	$data['no']			= 1;

	return View::make('panel/blog_list',$data);
});

Route::get('dashboard/blog/add',function(){
	$data['title'] = 'Add Blogs - Dashboard Administrator';
	return View::make('panel/blog_add',$data);
});

Route::get('dashboard/blog/edit/{id}','BlogController@edit');
Route::get('dashboard/blog/del/{id}','BlogController@delete');

//Profil
Route::get('dashboard/profil/{id}','ProfilController@edit');

// Portofolio
Route::get('dashboard/portofolio',function(){

	$portofolio = Portofolio::all();
	$data['title'] 			= 'Portofolio List - Dashboard Administrator';
	$data['portofolio']		= $portofolio;
	$data['no']				= 1;

	return View::make('panel/portofolio_list',$data);
});



//////////////////////////////////////////////////////////////////////////////////////////

//POST ROUTE //
Route::post('user/save','UserController@create');
Route::post('auth','UserController@auth');
//Pages
Route::post('dashboard/pages/save','PagesController@create');
Route::post('dashboard/pages/update/{id}','PagesController@update');

//Blog
Route::post('dashboard/blog/save','BlogController@create');
Route::post('dashboard/blog/update/{id}','BlogController@update');

//Profil
Route::post('dashboard/profil/save/{id}','ProfilController@update');

