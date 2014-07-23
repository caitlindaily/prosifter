<?php

class ProviderController extends BaseController {


	public function index()
	{
		$providers = Provider::paginate(5);

		if (Input::has('search')) {

			$search = Input::get('search');
			$providers = Provider::where('company_name', 'LIKE', "%$search%")
				->orderBy('created_at', 'desc')
				->paginate(5);
		}

		return View::make('search.show')->with('providers', $providers);

	}


	public function create()
	{
		return View::make('create-edit');
	}

	public function createReview($id)
	{
		$provider = Provider::findOrFail($id);
		return View::make('post.createReview')->with('provider', $provider);
	}

	public function store()
	{
		//Create instance of validator and use make. Want to validate all input with the rules from Post.
		$validator = Validator::make(Input::all(), Provider::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your submission.');
			Log::info('validation error');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$provider = new Provider();
			$provider->admin_user_id = Auth::user()->id;
			// $provider->provider_id = 1;
			$provider->company_name = Input::get('company_name');
			$provider->location = Input::get('location');
			$provider->slug = Input::get('company_name');
			$provider->save();



			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$provider->addUploadedImage(Input::file('image'));
				$provider->save();
			}
			Session::flash('successMessage', 'Company was created successfully!!!');
			return Redirect::action('HomeController@showProfile');
		}

	}

	public function saveReview($id) {

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your submission.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->provider_id = $id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();



		if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$post->addUploadedImage(Input::file('image'));
				$post->save();
			}
			Session::flash('successMessage', 'Post was created successfully!!!');
			return Redirect::action('ProviderController@show', $id);
			}
	}

	public function show($id)
	{
		$provider = Provider::findOrFail($id);
		return View::make('provider.show')->with('provider', $provider);
	}

	public function edit($id)
	{
		$provider = Provider::find($id);
		return View::make('editProfile')->with('provider', $provider);

	}


	public function update($id)
	{
		$provider = Provider::findOrFail($id);
		$provider->admin_user_id = Auth::user()->id;
		$validator = Validator::make(Input::all());

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your update.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$provider->company_name = Input::get('company_name');
			$provider->location = Input::get('location');
			$provider->slug = Input::get('company_name');
			$provider->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
				$provider->addUploadedImage(Input::file('image'));
				$provider->save();
			}
			Session::flash('successMessage', 'Your company was updated!!!');
			return Redirect::action('HomeController@showProfile');
		}
	}


	public function destroy($id)
	{
		$provider = Provider::findOrFail($id);
		$provider->delete();
		Session::flash('successMessage', 'Company was successfully deleted.');
		return Redirect::action('HomeController@index');
	}


}