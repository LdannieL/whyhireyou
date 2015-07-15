<?php namespace App\Repositories;

use App\Models\User;

 class UserRepository {
 	public function findByEmailOrCreate($userData)
 	{
 		// dd($userData);
 		$user = User::where('email', '=', $userData->email)->first();
        if(!$user) {
        	if(!$userData->email) $userData->email = 'some'.rand(1,1000).'@email.com';
            $user = User::create([
                // 'provider_id' => $userData->id,
                'name' => $userData->name,
                // 'username' => $userData->nickname,
                		// 'email' => $userData->email,
                'email' => $userData->email,
                'avatar' => $userData->avatar,
                // 'avatar' => $userData->avatar_original,
                // 'active' => 1,
            ]);
        }

        // $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;

 		// return User::firstOrCreate([

 		// // 	// 'name' => $userData->getName(),
 		// // 	// 'email' => $userData->getEmail(),
 		// // 	// 'image' => $userData->getAvatar()

 		// 'name' => $userData->name,
 		// 'email' => $userData->email,
 		// 'image' => $userData->avatar()



 		// 			// 'email' => $userData->email,
 		// 	// 'email' => $data['email'],

 		// 	// 'image' => $userData->avatar
 			// ]);
 	}

 }