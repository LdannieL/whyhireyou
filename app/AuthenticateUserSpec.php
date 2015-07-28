<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;
use App\Repositories\UserRepository;
use \Input;

class AuthenticateUserSpec
{

	public function __construct(UserRepository $users, Socialite $socialite, Guard $auth)
	{
		$this->users = $users;
		$this->socialite = $socialite;
		$this->auth = $auth;

	}

	public function execute($hasCode, AuthenticateUserListener $listener, $provider)
	{
		// $provider = 'twitter';
		// $provider = 'github';
		if ( ! $hasCode) return $this->getAuthorizationFirstS($provider);
		$user = $this->users->findByEmailOrCreate($this->getSocialUser($provider));
		$this->auth->login($user, true);

		return $listener->userHasLoggedIn($user); 
	}

			private function getAuthorizationFirstS($provider)
			{
				// $provider = 'twitter';
				$provider = 'github';
				return $this->socialite->driver($provider)->redirect();
			}

			private function getSocialUser($provider)
			{
				// $provider = 'twitter';
				$provider = 'github';
				return $this->socialite->driver($provider)->user();
			}

}
