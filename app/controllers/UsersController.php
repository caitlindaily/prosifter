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


	public function show($slug)
	{

	}


	public function edit($id)
	{

	}


	public function update($id)
	{

	}


	public function destroy($id)
	{

	}


}