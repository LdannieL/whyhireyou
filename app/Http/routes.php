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

Route::get('/auth/loginwithfacebook', ['as' => 'loginwithfacebook', 'uses' => 'Auth\AuthController@loginFacebook']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/landing', function () {
    return view('landing.index');
});

Route::post('logout', array('as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout'));

Route::group(['prefix' => "user", 'middleware' => 'auth'], function(){
	Route::get('/{id}/dashboard', function () {
	    return view('admin.index');
	});
});
// Route::post('/login', 'AuthController@Login');

Route::get('/', ['as' => 'home', 'uses' => 'JobsController@index']);

Route::get('/{id}', ['as' => 'job', 'uses' =>'JobsController@show']);

Route::group(['prefix' => "admin", 'middleware' => 'auth'], function(){
// Route::group(['prefix' => "admin"], function(){
	Route::resource('jobs','AdminJobController');
	Route::resource('categories','AdminCategoryController');
	Route::resource('users','AdminUserController');
	Route::resource("job1s","AdminJob1Controller");
	Route::resource("types","AdminTypeController");
});

Route::post('search', 
  array('uses' => 'JobsController@search', 'as' => 'search'));

Route::get('results/{keyword?}/{state?}/{category?}', 
  array('uses' => 'JobsController@searchResult', 'as' => 'searchResult'));

Route::get('/thankyou', array('as' => 'thankyou', function () {
	    return view('thankyou');
}));

// Route::get('/thankyou', function () {
//     return view('thankyou');
// });