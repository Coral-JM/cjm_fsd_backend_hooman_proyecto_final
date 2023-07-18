<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            'user_id'=> 2,
            'local_id'=> 1,
            'title'=> 'Test Review',
            'description'=> 'Lorem ipsum',
            'rating'=> 5,
            'favorite'=> true,
        ]);
    }
}
