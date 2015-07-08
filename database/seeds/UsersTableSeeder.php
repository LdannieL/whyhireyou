<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			App\Models\User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('123456'),
                'image' => $faker->url(),
                'role' => 'User'
			]);
		}
    }
}