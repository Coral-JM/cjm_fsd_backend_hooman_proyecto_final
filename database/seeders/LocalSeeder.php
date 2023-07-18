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
            'schedule'=>'Miércoles y jueves de 20h a 23h; viernes y sábado de 13h a 16h y de 20h a 23h; Domingos de 13h a 16h',
            'type'=> 'Cocina Israelí',
            'rating'=> 5,
            'image' => 'kukla.png',
            'company_id'=> 1,
        ]);
        DB::table('locals')->insert([
            'name'=>'Federal Café',
            'direction'=>'Embajador Vich, 15 - Valencia',
            'url'=> 'https://federalcafe.es/valencia/',
            'phone'=>'960 617 596',
            'schedule'=>'Lunes a jueves de 9h a 20h; Viernes y sábado de 9h a 21h; Domingo de 9h a 20h',
            'type'=> 'Healthy',
            'rating'=> 5,
            'image' => 'federalCafe.jpg',
            'company_id'=> 1,
        ]);
        DB::table('locals')->insert([
            'name'=>'La Consentida',
            'direction'=>'C/ del Doctor Serrano, 22 - Valencia',
            'url'=> 'https://federalcafe.es/valencia/',
            'phone'=>'633 75 70 13',
            'schedule'=>'Miércoles de 19h a 24h; De jueves a viernes de 9h a 12h y de 19h a 24h; Sábados de 9h a 24h; Domingos de 9h a 12h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 3,
            'image' => 'LaConsentida.jpg',
            'company_id'=> 1,
        ]);
    }
}
