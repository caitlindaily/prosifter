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
			return Redirect::action('PostsController@index');
		}
		else 
		{
    		Session::flash('errorMessage', 'Password did not match confirmation.');
    		return Redirect::action('PostsController@index')->withInput();
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