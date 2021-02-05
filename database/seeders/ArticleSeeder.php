<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$faker = Faker::create();
        for ($i=0; $i < 0; $i++){

DB::table('articles')->insert([

    'title'=>$faker->title
]);
        }



    }
}
