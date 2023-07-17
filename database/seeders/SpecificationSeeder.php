<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specifications')->insert([
            ['name'=> 'Gluten free'],
            ['name'=> 'Vegetarian'],
            ['name'=> 'Vegan'],
        ]);
    }
}
