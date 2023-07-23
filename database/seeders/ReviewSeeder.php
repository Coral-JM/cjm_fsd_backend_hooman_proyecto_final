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
            'user_id'=> 3,
            'local_id'=> 1,
            'title'=> 'Espectacular',
            'description'=> 'Sin duda uno de los mejores locales de Valencia. La comida es espectacular, pero el servicio aún más. Son súper amables y el espacio está adaptado a los perretes.',
            'rating'=> 5
        ]);
        DB::table('reviews')->insert([
            'user_id'=> 3,
            'local_id'=> 2,
            'title'=> 'Muy recomendable',
            'description'=> 'El sitio es precioso, el ambiente muy tranquilo y la comida súper rica. Nos trataron genial y adaptaron el espacio a nuestra perrita. Todo de 10',
            'rating'=> 5
        ]);
    }
}
