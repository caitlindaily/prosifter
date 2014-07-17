<?php

class ProviderController extends BaseController {

    public function findProviderByCategory($categoryName) {

	    $category = Category::where('name', '=', $categoryName)->first();
	    $providers = $category->providers()->orderBy('created_at', 'desc')->paginate(2);

	    $data = array(
	    	'category' => $category,
	    	'providers' => $providers,
	    );
	    // pass the $category on to the view
	    return View::make('provider.index')->with($data);

	}

	public function index()
	{		
		$query = Provider::with('user');

		if (Input::has('search')) {

			$search = Input::get('search');
			$query->where('company_name', 'LIKE', "%$search%");
		} 
		$posts = $query->orderBy('created_at', 'desc')->paginate(5);
		return View::make('provider.show')->with('providers', $providers);
		
	}


	public function create()
	{
		return View::make('create-edit');
	}

	public function store()
	{
		//Create instance of validator and use make. Want to validate all input with the rules from Post.
		$validator = Validator::make(Input::all());

		if ($validator->fails()) {

			Session::flash('errorMessage', 'There were errors with your submission.');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$provider = new Provider();
			$provider->admin_user_id = Auth::user()->id;
			$provider->provider_id = 1;
			$provier->company_name = Input::get('company_name');
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


	public function show($providerName)
	{
		$provider = Provider::findOrFail($providerName);
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