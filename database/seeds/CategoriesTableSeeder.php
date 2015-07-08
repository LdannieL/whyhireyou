<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
    	App\Models\Category::create(array(
            'name' => 'IT'
        ));

        App\Models\Category::create(array(
            'name' => 'tourism'
        ));

        App\Models\Category::create(array(
            'name' => 'construction'
        ));

        App\Models\Category::create(array(
            'name' => 'accounting'
        ));
    }

}