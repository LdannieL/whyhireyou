<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class StatementTableSeeder extends Seeder {

    public function run()
    {
		foreach(range(1, 15) as $index)
		{
			App\Models\Statement::create([
				'statement_number' => $index,
                'text' => 'Which statement best describes you?'
			]);
		}
    }

}