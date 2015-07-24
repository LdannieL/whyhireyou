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

// Route::get('/auth/loginwithfacebook', ['as' => 'loginwithfacebook', 'uses' => 'Auth\AuthController@loginFacebook']);
Route::get('/auth/login/{provider}', ['as' => 'loginsocial', 'uses' => 'Auth\AuthController@loginSocial']);

// Route::get('twitter/login', ['as' => 'twitter.login', function(){
//     // your SIGN IN WITH TWITTER  button should point to this route
//     $sign_in_twitter = true;
//     $force_login = false;

//     // Make sure we make this request w/o tokens, overwrite the default values in case of login.
//     Twitter::reconfig(['token' => '', 'secret' => '']);
//     $token = Twitter::getRequestToken(route('twitter.callback'));

//     if (isset($token['oauth_token_secret']))
//     {
//         $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

//         Session::put('oauth_state', 'start');
//         Session::put('oauth_request_token', $token['oauth_token']);
//         Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

//         // dd(Twitter::get());
//         return Redirect::to($url);
//     }

//     return Redirect::route('twitter.error');
// }]);

// Route::get('twitter/callback', ['as' => 'twitter.callback', function() {
//     // You should set this route on your Twitter Application settings as the callback
//     // https://apps.twitter.com/app/YOUR-APP-ID/settings
//     if (Session::has('oauth_request_token'))
//     {
//         $request_token = [
//             'token'  => Session::get('oauth_request_token'),
//             'secret' => Session::get('oauth_request_token_secret'),
//         ];

//         Twitter::reconfig($request_token);

//         $oauth_verifier = false;

//         if (Input::has('oauth_verifier'))
//         {
//             $oauth_verifier = Input::get('oauth_verifier');
//         }

//         // getAccessToken() will reset the token for you
//         $token = Twitter::getAccessToken($oauth_verifier);

//         if (!isset($token['oauth_token_secret']))
//         {
//             return Redirect::route('twitter.login')->with('flash_error', 'We could not log you in on Twitter.');
//         }

//         $credentials = Twitter::getCredentials();

//         if (is_object($credentials) && !isset($credentials->error))
//         {
//             // $credentials contains the Twitter user object with all the info about the user.
//             // Add here your own user logic, store profiles, create new users on your tables...you name it!
//             // Typically you'll want to store at least, user id, name and access tokens
//             // if you want to be able to call the API on behalf of your users.

//             // This is also the moment to log in your users if you're using Laravel's Auth class
//             // Auth::login($user) should do the trick.

//             Session::put('access_token', $token);

//             return Redirect::to('/')->with('flash_notice', 'Congrats! You\'ve successfully signed in!');
//         }

//         return Redirect::route('twitter.error')->with('flash_error', 'Crab! Something went wrong while signing you up!');
//     }
// }]);

// Route::get('twitter/error', ['as' => 'twitter.error', function(){
//     // Something went wrong, add your own error handling here
// }]);

// Route::get('twitter/logout', ['as' => 'twitter.logout', function(){
//     Session::forget('access_token');
//     return Redirect::to('/')->with('flash_notice', 'You\'ve successfully logged out!');
// }]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('logout', array('as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout'));

Route::get('/landing', function () {
    return view('landing.index');
});

Route::get('/quiz/{id?}', array('as' => 'quiz', function () { 
    return view('quiz');
}));

Route::get('/statement', ['as' => 'talentstar', 'uses' => 'StatementController@index']);

Route::get('/statement/{id}', ['as' => 'statements', 'uses' =>'StatementController@show']);

Route::post('statement/process', 'StatementController@processForm');

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
	Route::resource("statements","AdminStatementController");
	Route::resource("choices","AdminChoiceController");
	Route::resource("profiles","AdminProfileController");
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