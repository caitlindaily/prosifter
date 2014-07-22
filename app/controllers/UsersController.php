<?php

class UsersController extends \BaseController {


	public function getRegister() {
    $this->layout->content = View::make('users.register');
	}

	public function index()
	{

	}


	public function create()
	{

	}

	public function store()
	{

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Password did not match confirmation.');
    		return Redirect::action('PostsController@index')->withInput();
		}
		else
		{
			$user = new User;

			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			// $user->password = Input::get('password_confirmation');

			$user->save();
			Session::flash('successMessage', 'You have successfully created an account.');
			return Redirect::action('PostsController@index');
		}



	}


	public function show()
	{
		return View::make('user.profile');	
	}


	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user.editProfile')->with('user', $user);
	}


	public function update($id)
	{
		$user = User::findOrFail($id);

		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->save();
		return Redirect::action('HomeController@showProfile');
	}


	public function destroy($id)
	{

	}


}