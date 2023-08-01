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
            'direction'=>'Calle de Palomino, 8 - Valencia',
            'url'=> 'https://kuklavalencia.com/',
            'phone'=>'665479038',
            'schedule'=>'Miércoles y jueves de 20h a 23h; viernes y sábado de 13h a 16h y de 20h a 23h; Domingos de 13h a 16h',
            'type'=> 'Cocina Israelí',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/kukla.png',
            'company_id'=> 1,
            'isActive'=> false,
        ]);
        DB::table('locals')->insert([
            'name'=>'Federal Café',
            'direction'=>'Calle Embajador Vich, 15 - Valencia',
            'url'=> 'https://federalcafe.es/valencia/',
            'phone'=>'960617596',
            'schedule'=>'De lunes a jueves de 9h a 20h; Viernes y sábado de 9h a 21h; Domingo de 9h a 20h',
            'type'=> 'Healthy',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/federalCafe.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'La Consentida',
            'direction'=>'Calle del Doctor Serrano, 22 - Valencia',
            'url'=> 'https://federalcafe.es/valencia/',
            'phone'=>'633757013',
            'schedule'=>'Miércoles de 19h a 24h; De jueves a viernes de 9h a 12h y de 19h a 24h; Sábados de 9h a 24h; Domingos de 9h a 12h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 3,
            'image' => 'https://s3-hooman.s3.amazonaws.com/LaConsentida.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Ubik Café',
            'direction'=>'Calle de Literato Azorín, 13 - Valencia',
            'url'=> 'https://ubikcafe.blogspot.com/',
            'phone'=>'963741255',
            'schedule'=>'De lunes a martes de 17h a 1:30h; De miércoles a domingo de 11h a 1:30h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 4,
            'image' => 'https://s3-hooman.s3.amazonaws.com/Ubik.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Trencat',
            'direction'=>'Calle del Trench, 21 - Valencia',
            'url'=> '',
            'phone'=>'963122389',
            'schedule'=>'De lunes a sábado de 8:30h a 17h; Domingo cerrado',
            'type'=> 'Desayunos y meriendas',
            'rating'=> 4,
            'image' => 'https://s3-hooman.s3.amazonaws.com/Trencat.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Vlue Arribar',
            'direction'=>'Calle Marina Real Juan Carlos I - Valencia',
            'url'=> 'https://vluearribar.com/cartas/',
            'phone'=>'963449757',
            'schedule'=>'De lunes a domingo de 11h a 1:30h',
            'type'=> 'Cocina mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/VlueArribar.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Café Berlin',
            'direction'=>'Calle de Cadis, 22-24 - Valencia',
            'url'=> 'https://cafeberlinvalencia.es/',
            'phone'=>'963810024',
            'schedule'=>'De lunes a domingo de 11h a 1:30h',
            'type'=> 'Cocktelería y cervecería especializada',
            'rating'=> 4,
            'image' => 'https://s3-hooman.s3.amazonaws.com/cafeBerlin.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'El Garaje Foodie',
            'direction'=>'Calle Doctor Ferran 10 - Valencia',
            'url'=> 'http://www.elgaraje.es/',
            'phone'=>'603011602',
            'schedule'=>'De lunes a viernes de 19:30h a 24h; Sábado y domingo de 13:30h a 24h',
            'type'=> 'Street Food',
            'rating'=> 4,
            'image' => 'https://s3-hooman.s3.amazonaws.com/GarajeFoodie.png',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Oliví',
            'direction'=>'Calle de Calatrava, 4 - Valencia',
            'url'=> '',
            'phone'=>'961050643',
            'schedule'=>'De lunes a viernes de 19h a 23h; Sábado y domingo cerrado',
            'type'=> 'Bodega y tapeo',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/Olivi.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Unsushi',
            'direction'=>'Calle de Murillo, 31 - Valencia',
            'url'=> 'unsushi.es',
            'phone'=>'960646663',
            'schedule'=>'De lunes a viernes de 13h a 16h y de 20h a 23h; Sábado y domingo de 13h a 24h',
            'type'=> 'Cocina japonesa - sushi',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/unsushi.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Slaughterhouse',
            'direction'=>'Calle de Dénia 22 - Valencia',
            'url'=> '',
            'phone'=>'960223820',
            'schedule'=>'De martes a sábado de 19h a 24h',
            'type'=> 'Hamburguesería',
            'rating'=> 4,
            'image' => 'https://s3-hooman.s3.amazonaws.com/Slaughterhouse.png',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'La cocina de Lupe',
            'direction'=>'Calle del Escultor Alfons Gabino, 4 - Valencia',
            'url'=> 'https://www.instagram.com/cocinaluperestaurante/?igshid=YmMyMTA2M2Y%3D',
            'phone'=>'644757058',
            'schedule'=>'De martes a jueves de 18:30h a 24h; Viernes y sábado de 13:30 a 16h y de 20h a 24h',
            'type'=> 'Comida mejicana',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/CocinaLupe.jpeg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Agua de vermut',
            'direction'=>'Calle de Centelles, 18 - Valencia',
            'url'=> 'https://agua-de-vermut.negocio.site/',
            'phone'=>'960823517',
            'schedule'=>'Jueves de 11:30h a 24h; Viernes de 11:30 a 1h; Sábado de 11h a 1h; Domingo de 11:30h a 18h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/aguadevermut.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Almalibre Açaí House',
            'direction'=>'Calle de Roteros, 16 - Valencia',
            'url'=> 'https://www.almalibreacaihouse.com/valencia',
            'phone'=>'961048475',
            'schedule'=>'De martes a domingo de 10h a 23h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/almalibre.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Aloha Poké',
            'direction'=>'Calle de Martínez Cubells, 6 - Valencia',
            'url'=> 'https://www.alohapoke.es/menu',
            'phone'=>'960088570',
            'schedule'=>'De lunes a jueves de 12h a 22:30h; De viernes a domingo de 12h a 23h',
            'type'=> 'Comida hawaiana',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/aloha.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Bluebell Coffe Roasters',
            'direction'=>'Calle de Buenos Aires, 3 - Valencia',
            'url'=> 'http://bluebellcoffeeco.com/',
            'phone'=>'678361615',
            'schedule'=>'De lunes a domingo de 9h a 16h',
            'type'=> 'Desayunos y cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/bluebell.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'SALAT Bar i Botiga',
            'direction'=>'Calle del Pintor Salvador Abril, 34 - Valencia',
            'url'=> 'https://salat-bar-i-botiga.business.site/',
            'phone'=>'963034975',
            'schedule'=>'De martes a sábado de 20h a 24h',
            'type'=> 'Comida mallorquina',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/salat.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'La Chata Ultramarinos',
            'direction'=>'Calle de Literat Azorín, 4 - Valencia',
            'url'=> 'https://www.instagram.com/lachataultramarinos/',
            'phone'=>'675660017',
            'schedule'=>'De martes a viernes de 13h a 23h; Sábado y lunes de 12:30h a 23:30h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/lachata.png',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Café ArtySana',
            'direction'=>'Calle de Dénia, 49 - Valencia',
            'url'=> 'https://www.cafeartysana.com/',
            'phone'=>'697280999',
            'schedule'=>'De lunes a jueves de 8:30h a 18:30h; Viernes de 8:30h a 21h; Sábado de 9:30h a 18:30h; Domingo de 9:30h a 16h',
            'type'=> 'Brunch',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/artysana.jpeg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Casa Capicúa',
            'direction'=>'Calle de Jesús, 14 - Valencia',
            'url'=> 'https://casacapicua.es/',
            'phone'=>'611622423',
            'schedule'=>'De lunes a viernes de 8:30h a 16:30h; Jueves tambien de 19h a 22h; Sábado de 9:30 a 16:30h',
            'type'=> 'Brunch',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/capicua.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Bar Cafeteria Mani',
            'direction'=>'Calle del Arquitecte Alfaro, 14 - Valencia',
            'url'=> '',
            'phone'=>'640912977',
            'schedule'=>'De lunes a viernes de 7h a 21h; Domingo de 9h a 21h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/barmani.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Cocolinda',
            'direction'=>'Paseo de la Albereda, 14 - Valencia',
            'url'=> 'https://www.grupococolinda.com/',
            'phone'=>'960215917',
            'schedule'=>'De lunes a domingo de 9:30h a 0:30h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/cocolinda.jpeg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Bastard Coffe Kitchen',
            'direction'=>' Av. del Regne de València, 2 - Valencia',
            'url'=> 'https://www.bastardcoffeekitchen.com/',
            'phone'=>'',
            'schedule'=>'De lunes a domingo de 9h a 21h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/bastard.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'Brunch corner',
            'direction'=>'Calle del Comte Almodóvar, 1 - Valencia',
            'url'=> 'http://www.brunchcorner.es//',
            'phone'=>'963915230',
            'schedule'=>'De lunes a viernes de 8h a 20h; Sábado y domingo de 9h a 20h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/brunchcorner.JPG',
            'company_id'=> 1,
            'isActive'=> true,
        ]);
        DB::table('locals')->insert([
            'name'=>'La Casa Viva Russafa',
            'direction'=>'Calle de Cadiz, 76 - Valencia',
            'url'=> 'https://lacasaviva.com/',
            'phone'=>'963034713',
            'schedule'=>'De lunes a viernes de 13h a 17h y de 19:30h a 24h; Sábado y domingo de 11h a 17:30h y de 19:30h a 24h',
            'type'=> 'Cocina Mediterránea',
            'rating'=> 5,
            'image' => 'https://s3-hooman.s3.amazonaws.com/casaviva.jpg',
            'company_id'=> 1,
            'isActive'=> true,
        ]);




    }
    
}
