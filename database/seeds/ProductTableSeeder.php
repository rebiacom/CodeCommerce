<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use CodeCommerce\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('products')->truncate();

        factory('CodeCommerce\Product', 40)->create();
        $faker = Faker::create();

    }

}