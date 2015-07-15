<?php namespace App\Repositories;

use App\Models\User;

 class UserRepository {
 	public function findByEmailOrCreate($userData)
 	{
 		$user = User::where('email', '=', $userData->email)->first();
        if(!$user) {
            $user = User::create([
                // 'provider_id' => $userData->id,
                'name' => $userData->name,
                // 'username' => $userData->nickname,
                'email' => $userData->email,
                'avatar' => $userData->avatar,
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