<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//adding route to index page.
Route::get('/', 'HomeController@index');

View::share('categories', Category::all());

//adding route for postsController.
Route::resource('posts', 'PostsController');

//adding route for usersController.
Route::resource('users', 'UsersController');

// user routes
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');

// category routes


// provider routes
Route::resource('providers', 'ProviderController');
Route::get('/category/{name}', 'ProviderController@findProviderByCategory');

Route::get('/profile', 'HomeController@showProfile');