<?php

class BlogController extends \BaseController {

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
		$blog = new Blog;

		$clean = Input::get('title');
	    setlocale(LC_ALL, 'en_US.UTF8');

	    $delimiter = '-';

	    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
	    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	    $clean = strtolower(trim($clean, $delimiter));

		$blog->title 			= Input::get('title');
		$blog->slug 			= $clean;

		// $image 					= Input::file('img_header');
       

        $valid_exts = array('jpeg', 'jpg', 'png', 'gif'); // Ekstensi Yang Di Perbolehkan
	    $max_size = 2000 * 1024; // max file size (200kb)
	    $path = public_path() . '/file/blog'; // upload directory
	    $fileName = NULL;

	    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){

	    	$file = Input::file('img_header');
		    $ext = $file->guessClientExtension();
		    $size = $file->getClientSize();
		    $name = $file->getClientOriginalName();

		    if (in_array($ext, $valid_exts) AND $size < $max_size){
		    	if ($file->move($path,$name)){
		    		$fileName = $name;
		    	}
		    	else {
			    $status = 'Upload Fail: Unknown error occurred!';
			    }
		    }
		    else {
		    $status = 'Upload Fail: Unsupported file format or It is too large to upload!';
		    }
	    }
	    else {
		$status = 'Bad request!';
		}
		
		$blog->img_header 		= $fileName;

		 
		$blog->content 			= Input::get('content');
		$blog->save();

		return Redirect::to('dashboard/blog')->with('sukses', 'Data User Sudah Tersimpan');
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
		$blog = Blog::find($id);
		$data['title'] = 'Update Blogs';
		return View::make('panel/blog_edit',$data)->with('blog',$blog);
	}

	public function delete($id){

 		$blog = Blog::find($id);
 		$blog->delete();
 		 return Redirect::to('dashboard/blog');
 	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$image = Input::get('img_header');

		if(empty($image)){


			$id   = Input::get('id');
		    $blog = Blog::find($id);

		    $clean = Input::get('title');
		    setlocale(LC_ALL, 'en_US.UTF8');

		    $delimiter = '-';

		    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
		    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		    $clean = strtolower(trim($clean, $delimiter));

		    $blog->title 			= Input::get('title');
			$blog->slug 			= $clean;
			$blog->content 			= Input::get('content');

			$blog->save();
	     	return Redirect::to('dashboard/blog');


		}
		else {

			
			$id   = Input::get('id');
		    $blog = Blog::find($id);

		    $clean = Input::get('title');
		    setlocale(LC_ALL, 'en_US.UTF8');

		    $delimiter = '-';

		    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $clean);
		    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		    $clean = strtolower(trim($clean, $delimiter));

		    $valid_exts = array('jpeg', 'jpg', 'png', 'gif'); // Ekstensi Yang Di Perbolehkan
		    $max_size = 2000 * 1024; // max file size (200kb)
		    $path = public_path() . '/file/blog'; // upload directory
		    $fileName = NULL;

		    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){

		    	$file = Input::file('img_header');
			    $ext = $file->guessClientExtension();
			    $size = $file->getClientSize();
			    $name = $file->getClientOriginalName();

			    if (in_array($ext, $valid_exts) AND $size < $max_size){
			    	if ($file->move($path,$name)){
			    		$fileName = $name;
			    	}
			    	else {
				    $status = 'Upload Fail: Unknown error occurred!';
				    }
			    }
			    else {
			    $status = 'Upload Fail: Unsupported file format or It is too large to upload!';
			    }
		    }
		    else {
			$status = 'Bad request!';
			}
			

		    $blog->title 			= Input::get('title');
			$blog->slug 			= $clean;
			$blog->img_header 		= $fileName;
			$blog->content 			= Input::get('content');

			$blog->save();
	     	return Redirect::to('dashboard/blog');


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