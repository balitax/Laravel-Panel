<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$data = array(
			'title' => 'Administrator Apps With Laravel',
		);

		return View::make('panel/index',$data);
	}

	public function add_user()
	{
		
		$data = array(
			'title' => 'Add User - Administrator Apps With Laravel',
		);

		return View::make('panel/add_user',$data);
	}



	public function auth(){

		$data = array(
			'username'		=> Input::get('username'),
			'password'		=> Input::get('password'),
		);

		if(Auth::attempt($data)){
			return Redirect::to('dashboard');
		}
		else {
			return Redirect::to('login')->
				with('eror','Login Gagal! Periksa Username dan Password Anda');
		}

	}

	public function logout(){
		Auth::logout();
		return Redirect::to('login')->with('logout','Anda Sudah Logout!');
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = new User;

		$user->username 		= Input::get('username');
		$user->password 		= Hash::make(Input::get('password'));
		$user->email 		 	= Input::get('email');

		$user->save();

		return Redirect::to('user/add')->with('sukses', 'Data User Sudah Tersimpan');
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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