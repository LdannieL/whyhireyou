<?php namespace App\Http\Controllers\Auth;

// <--- if I use this one, it can't get $provider from url
use App\Http\Controllers\Controller;  
// use Illuminate\Routing\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;

use App\Models\User;
use \Redirect;
use \Input;

use App\AuthenticateUser;
use App\AuthenticateUserListener;

// class AuthController extends Controller {
class AuthController extends Controller implements AuthenticateUserListener{

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	// protected $redirectPath = 'user/{id}/dashboard';
	protected $redirectPath = '/';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	// public function loginFacebook(AuthenticateUser $authenticateUser, Request $request)
 //    {
 //    	return $authenticateUser->execute($request->has('code'), $this);
 //    }

	// public function userHasLoggedIn($user)
	// {
	// 	return redirect('/');
	// }

    // public function postRegister()
    // {
    //     return redirect('/')->withMessage('Thank you for registering.');
    // }
public function loginSocial(AuthenticateUser $authenticateUser, Request $request, $provider = null)
		    // public function loginSocial(AuthenticateUser $authenticateUser, Request $request, $provider)
		    {
		    	// $provider = Input::get('provider');
		    	$hasCode = ($request->has('code') || $request->has('oauth_token'));
		    	return $authenticateUser->executes($hasCode, $this, $provider);
		    }

    // public function loginFacebook(AuthenticateUser $authenticateUser, Request $request)
    // {
    // 	$hasCode = $request->has('code');
    // 	return $authenticateUser->execute($hasCode, $this);
    // 	// return $authenticateUser->execute($request->has('code'), $this);
    // }

	public function userHasLoggedIn($user)
	{
		return redirect('/');
	}

}