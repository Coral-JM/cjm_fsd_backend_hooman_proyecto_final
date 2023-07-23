<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorites')->insert([
            'user_id'=> 3,
            'local_id'=> 1
        ]);
        DB::table('favorites')->insert([
            'user_id'=> 3,
            'local_id'=> 2
        ]);
        DB::table('favorites')->insert([
            'user_id'=> 3,
            'local_id'=> 23
        ]);
    }
}
