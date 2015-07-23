<?php namespace App\Repositories;

use App\Models\User;

 class UserRepository {
    public function findByEmailOrCreate($userData)
    {
        // dd($userData);
        $user = User::where('email', '=', $userData->email)->first();
        if(!$user) {
            if(!$userData->email) $userData->email = 'some'.rand(1,1000).'@email.com';
            if(!$userData->name) $userData->name = 'Anonymus';
            $user = User::create([
                'provider_id' => $userData->id,
                'name' => $userData->name,
                // 'username' => $userData->nickname,
                        // 'email' => $userData->email,
                'email' => $userData->email,
                'image' => $userData->avatar,
                // 'avatar' => $userData->avatar_original,
                // 'active' => 1,
            ]);
        }

        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }

    //     public function checkIfUserNeedsUpdating($userData, $user) {
    //     $socialData = [
    //         'name' => $userData->name,
    //         'email' => $userData->email,
    //         'image' => $userData->avatar
    //     ];
    //     $dbData = [           
    //         'name' => $user->name,
    //         'email' => $user->email,
    //         'image' => $user->avatar
    //     ];

    //     if (!empty(array_diff($socialData, $dbData)) == false) {
    //         $user->name = $userData->name;
    //         $user->email = $userData->email;
    //         $user->image = $userData->avatar;
    //         $user->save();
    //     }
    // }
            //solution from php manual
            // public function _empty($val) { return empty($val); }

        public function checkIfUserNeedsUpdating($userData, $user) {
        $socialData = [
            'name' => $userData->name,
            'email' => $userData->email,
            'image' => $userData->avatar
        ];
        $dbData = [           
            'name' => $user->name,
            'email' => $user->email,
            'image' => $user->avatar
        ];

        //Solution for Mac specific or rather php 5.6.2 Fatal error: Can't use function return value in write context in with php fuction empty
        // if (!empty(array_diff($socialData, $dbData)) == false) {
        if (!array_diff($socialData, $dbData)){
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->image = $userData->avatar;
            $user->save();
        }
    }

// $difference = array_diff($socialData, $dbData));

//         if (!empty($difference) {
//             $user->name = $userData->name;
//             $user->email = $userData->email;
//             $user->image = $userData->avatar;
//             $user->save();
//         }
//     }

 }