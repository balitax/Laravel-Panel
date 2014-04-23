<?php

class ProfilController extends \BaseController {

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
		$profil = Profil::find($id);
		$data['title'] = 'Update Profil';
		return View::make('panel/profil',$data)->with('profil',$profil);
	}

	public function delete($id){

 	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$id   			= Input::get('id');
	    $profil 		= Profil::find($id);

		$password = Input::get('password');

		if(empty($password)){

			$profil->username 		= Input::get('username');
			$profil->email 			= Input::get('email');
			$profil->save();
			return Redirect::to('dashboard/profil/4');


		}
		else {

			$profil->username 		= Input::get('username');
			$profil->password 		= Hash::make(Input::get('password'));
			$profil->email 			= Input::get('email');
			$profil->save();
			return Redirect::to('dashboard/profil/4');
		}


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