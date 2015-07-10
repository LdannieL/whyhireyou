<?php namespace App\Services;

use App\Models\User;
use \Image;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		// $image = Input::file('image');
						// $image = $data['image'];
						// $filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
						// Image::make($image->getRealPath())->resize(468, 249)->save('public/img/users/'.$filename);
			// $product->image = 'img/products/'.$filename;

		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'role' => $data['role'],
			// 'image' => 'img/users/'.$filename,
			'image' => 'img/users/img',
		]);
	}

}