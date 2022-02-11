<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => "Coca Cola 500ml",
            'precio_puntos' => '20',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Inka Cola 1L",
            'precio_puntos' => '40',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Fanta 2L",
            'precio_puntos' => '60',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Fanta 350ml",
            'precio_puntos' => '10',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pepsi 1L",
            'precio_puntos' => '40',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pepsi 300ml",
            'precio_puntos' => '8',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Guaraná 500ml",
            'precio_puntos' => '20',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "7up 2L",
            'precio_puntos' => '60',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Big Cola 3L",
            'precio_puntos' => '70',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "7up 500ml",
            'precio_puntos' => '20',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Inka Cola 2L",
            'precio_puntos' => '40',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Coca Cola 2L",
            'precio_puntos' => '40',
            'imagen' => 'https://media-cdn.tripadvisor.com/media/photo-s/16/7a/bf/e3/fachada-de-la-tienda.jpg'
        ]);
    }
}
