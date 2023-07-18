<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'user_id'=> 2,
            'company'=> 'Company Name Test S.L',
            'CIF'=> 'F12345678',
            'owner_name'=> 'Name Owner',
            'owner_surname'=> 'Surname Owner',
            'direction'=> 'C/ Test Street',
            'zip_code'=> '000001'
        ]);
        DB::table('companies')->insert([
            'user_id'=> 2,
            'company'=> 'SecondCompany Name Test S.L',
            'CIF'=> 'F12234567',
            'owner_name'=> 'Name Owner',
            'owner_surname'=> 'Surname Owner',
            'direction'=> 'C/ Test Street',
            'zip_code'=> '000001'
        ]);
    }
}
