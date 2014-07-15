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




//adding route for postsmcontroller.
Route::resource('posts', 'PostController');



//adding route to index page.
Route::get('/', 'HomeController@index');

