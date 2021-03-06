<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('JobsTableSeeder');
		$this->call('TypesTableSeeder');
		$this->call('StatementTableSeeder');
		$this->call('ChoiceTableSeeder');
		$this->call('ProfileTableSeeder');
	}

}
