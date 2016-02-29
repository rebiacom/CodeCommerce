<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use CodeCommerce\Tag;
use Faker\Factory as Faker;


class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Tags')->truncate();

        factory('CodeCommerce\Tag', 20)->create();
        $faker = Faker::create();

    }

}
