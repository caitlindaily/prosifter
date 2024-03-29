<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{
		return View::make('index');

	}

	public function meetTheTeam() {

		return View::make('team');
	}


	public function showLogin() {
		return View::make('index');
	}

	public function doLogin() {

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
    		Session::flash('successMessage', 'You have successfully logged in.');
    		return Redirect::intended(action('PostsController@index'));
		}
		else
		{
    		Session::flash('errorMessage', 'Email or Password not found.');
    		return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function doLogout() {
		Auth::logout();

		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::action('PostsController@index');
	}

	public function showProfile() {
		return View::make('user.profile');
	}

}




