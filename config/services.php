<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

	// 'facebook' => [
	// 'client_id' => env('client_id', 'FACEBOOK_APP_ID'),
	// 'client_secret' => env('client_secret', 'FACEBOOK_APP_SECRET'),
	// // 'client_id' => getenv('FACEBOOK_App_ID'),
	// // 'client_secret' => getenv('FACEBOOK_App_Secret'),
	// 'redirect' => 'http://localhost:8000/auth/login'
	// ],

	'facebook' => [
	'client_id' => getenv('FACEBOOK_APP_ID'),
	'client_secret' => getenv('FACEBOOK_APP_SECRET'),
	// 'client_id' => getenv('FACEBOOK_App_ID'),
	// 'client_secret' => getenv('FACEBOOK_App_Secret'),
	'redirect' => 'http://localhost:8000/auth/loginwithfacebook'
	],

];
