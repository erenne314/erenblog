<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['ahmet', 'hasan', 'leyla', 'suzan'];
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user,
                'job' => $user,
                'created_at' => now(),
                'updated_at' => now()
            ]);


        }
    }
}
