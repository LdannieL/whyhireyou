<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangingForeignKeysInJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->dropColumn('category_id');
			$table->dropColumn('user_id');
			$table->dropColumn('type_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
		});
	}

}
