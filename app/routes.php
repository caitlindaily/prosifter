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
//Route::post('/rating', 'HomeController@rate');

Route::post('/rate-provider', function () {

    $providerId = Input::get('provider_id');
    $starRating = Input::get('star_rating');

    // create rating for provider
    $rating = new Rating();
    $rating->user_id = 1;
    $rating->post_id = 1;
    $rating->provider_id = $providerId;
    $rating->rating = $starRating;
    $rating->save();

    $error = false;
    $message = "Rated!";

    $result = array(
        'error' => $error,
        'message' => $message,
    );

    return Response::json($result);

});

View::share('categories', Category::all());

//adding route for postsController.
Route::resource('posts', 'PostsController');

//adding route for usersController.
Route::resource('users', 'UsersController');

// user routes
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');
Route::get('/profile', 'HomeController@showProfile');

// category routes
Route::resource('category', 'CategoryController');

// provider routes
Route::resource('providers', 'ProviderController');
Route::post('/providers/{id}/save-review', 'ProviderController@saveReview');
Route::get('/providers/{id}/create-review', 'ProviderController@createReview');
Route::get('/{search}', 'ProviderController@index');

// admin routes
Route::controller('/admin', 'AdminController');
