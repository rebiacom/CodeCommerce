<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use CodeCommerce\Category;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('categories')->truncate();

        factory('CodeCommerce\Category', 15)->create();
        $faker = Faker::create();

    }

}