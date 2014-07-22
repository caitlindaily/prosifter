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
		$user = new User;

		$user->first_name = Input::get('firstname');
		$user->last_name = Input::get('lastname');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$password_confirmation = Input::get('password_confirmation');
		
		if($password_confirmation == $user->password) 
		{
			$user->save();
			Session::flash('successMessage', 'You have successfully created an account.');
			return Redirect::action('PostsController@index');
		}
		else 
		{
    		Session::flash('errorMessage', 'Password did not match confirmation.');
    		return Redirect::action('PostsController@index')->withInput();
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