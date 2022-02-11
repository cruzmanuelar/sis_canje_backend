<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centros')->insert([
            'nombre' => "La Segura",
            'direccion' => 'Av La Paz, Lima',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);
        DB::table('centros')->insert([
            'nombre' => "El principito",
            'direccion' => 'Jiron 544, Cercado Lima',
            'imagen' => 'https://www.tribekaretail.com/wp-content/uploads/2020/07/como-disenar-el-escaparate-y-la-fachada-de-tu-tienda-de-moda-herb-and-be-transparencia.jpg'
        ]);
        DB::table('centros')->insert([
            'nombre' => "La Caribeña",
            'direccion' => 'Av Arequipa, Los Olivos',
            'imagen' => 'https://www.bolsalea.com/blog/media/fachada-bonita1.jpg'
        ]);
        DB::table('centros')->insert([
            'nombre' => "Abasto Bonito",
            'direccion' => 'Jiron 34, Arboleda',
            'imagen' => 'https://thumbs.dreamstime.com/z/fachada-de-una-calle-en-roma-117032559.jpg'
        ]);
        DB::table('centros')->insert([
            'nombre' => "El Centenario",
            'direccion' => 'Av Carlota, Centro de Lima',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/0e/54/74/9d/fachada-calle-gracia.jpg'
        ]);
        DB::table('centros')->insert([
            'nombre' => "El Resplandor",
            'direccion' => 'Calle Otuzco, Lima',
            'imagen' => 'https://constructivo.com/imgPosts/1551719151xc1w4fpy.jpg'
        ]);

    }
}
