<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


	public function create()
	{
		$pages = new Pages;

		$clean = Input::get('title');
	    setlocale(LC_ALL, 'en_US.UTF8');

	    $delimiter = '-';

	    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	    $clean = strtolower(trim($clean, $delimiter));

		$pages->title 			= Input::get('title');
		$pages->slug 			= $clean;
		$pages->content 		= Input::get('content');
		$pages->status 			= Input::get('status');
		$pages->save();

		return Redirect::to('dashboard/pages')->with('sukses', 'Data User Sudah Tersimpan');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pages = Pages::find($id);
		$data['title'] = 'Update Pages';
		return View::make('panel/pages_edit',$data)->with('pages',$pages);
	}

	public function delete($id){

 		$pages = Pages::find($id);
 		$pages->delete();
 		 return Redirect::to('dashboard/pages');
 	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$id   = Input::get('id');
	    $pages = Pages::find($id);

	    $clean = Input::get('title');
	    setlocale(LC_ALL, 'en_US.UTF8');

	    $delimiter = '-';

	    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	    $clean = strtolower(trim($clean, $delimiter));

	    $pages->title 			= Input::get('title');
		$pages->slug 			= $clean;
		$pages->content 		= Input::get('content');
		$pages->status 			= Input::get('status');

		$pages->save();
     	return Redirect::to('dashboard/pages');


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}