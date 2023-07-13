<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locals')->insert([
            'name'=>'Kukla - Midle Eastern Kitchen',
            'direction'=>'C. de Palomino, 8 - Valencia',
            'url'=> 'https://kuklavalencia.com/',
            'phone'=>'665479038',
            'schedule'=>'Miércoles y Jueves: de 20h a 23h; Viernes y Sábado: de 13h a 16h y de 20h a 23h; Domingos de 13h a 16h',
            'gluten_free'=> true,
            'vegetarian'=> true,
            'vegan'=> true,
            'type'=> "Cocina Israelí",
            'rating'=> 5,
            'favorite'=> true
        ]);
    }
}
