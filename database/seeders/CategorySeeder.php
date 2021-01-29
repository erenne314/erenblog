<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Saksi', 'Tuval', 'Resim', 'Heykel', 'Suluboya'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>$category,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
