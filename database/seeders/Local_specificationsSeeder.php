<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Local_specificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('local_specifications')->insert([
            'local_id'=> 1,
            'specification_id'=> 1
        ]);
        DB::table('local_specifications')->insert([
            'local_id'=> 1,
            'specification_id'=> 2
        ]);
        DB::table('local_specifications')->insert([
            'local_id'=> 1,
            'specification_id'=> 3
        ]);
    }
}
