<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/landing', function () {
    return view('landing.index');
});

Route::post('logout', array('as' => 'auth.logout', 'uses' => 'AuthController@getLogout'));

Route::group(['prefix' => "user", 'middleware' => 'auth'], function(){
	Route::get('/{id}/dashboard', function () {
	    return view('admin.index');
	});
});
// Route::post('/login', 'AuthController@Login');

Route::get('/', ['as' => 'home', 'uses' => 'JobsController@index']);

Route::get('/{id}', 'JobsController@show');

Route::group(['prefix' => "admin", 'before' => 'middleware'], function(){
// Route::group(['prefix' => "admin"], function(){
	Route::resource("jobs","AdminJobController");
	Route::resource("categories","AdminCategoryController");
});

