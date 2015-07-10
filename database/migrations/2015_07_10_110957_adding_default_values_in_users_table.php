<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingDefaultValuesInUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('role');
			$table->dropColumn('image');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->string('role')->default('User');
			$table->string('image')->default('img/users/anon.png');
		});
	}

}
