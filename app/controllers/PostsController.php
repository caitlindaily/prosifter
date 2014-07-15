<?php

class PostsController extends \BaseController {


	// public function __construct()
	// {
 //    // call base controller constructor
 //    	parent::__construct();

 //    	$this->beforeFilter('auth', array('except' => array('index', 'show')));
	// }

	public function index()
	{
		$query = Post::with('user');

		if (Input::has('search')) {

			$search = Input::get('search');
			$query->where('title', 'LIKE', "%$search%");
		}
		$posts = $query->orderBy('created_at', 'desc')->paginate(5);
		return View::make('posts.index')->with('posts', $posts);
	}


	public function create()
	{
		return View::make('Post.create-edit');
	}

	public function store()
	{
		//Create instance of validator and use make. Want to validate all input with the rules from Post.
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your submission.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = Input::get('title');
			$post->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}
			Session::flash('successMessage', 'Post was created successfully!!!');
			return Redirect::action('PostsController@index');
		}

	}


	public function show($slug)
	{
		$post = Post::findBySlug($slug);
		return View::make('posts.show')->with('post', $post);
	}


	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('Post.create-edit')->with('post', $post);

	}


	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->user_id = Auth::user()->id;
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your update.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = Input::get('title');
			$post->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}
			Session::flash('successMessage', 'Your post was updated!!!');
			return Redirect::action('PostsController@index');
		}
	}


	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post was successfully deleted.');
		return Redirect::action('PostsController@index');
	}


}