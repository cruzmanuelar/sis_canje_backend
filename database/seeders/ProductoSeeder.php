<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'precio_puntos' => '40',
            'canje_puntos' => '1' ,
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/525958-450-450/281027.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Inka Cola 1L",
            'precio_puntos' => '80',
            'canje_puntos' => '2' ,
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/730909-450-450/20111231.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Fanta 2L",
            'precio_puntos' => '120',
            'canje_puntos' => '2',
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/525930-450-450/5063.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Fanta 350ml",
            'precio_puntos' => '20',
            'canje_puntos' => '1',
            'imagen' => 'https://vmerce.co.za/wp-content/uploads/2020/11/45195.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pepsi 1L",
            'precio_puntos' => '80',
            'canje_puntos' => '2',
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/318909-450-450/gaseosa-pepsi-botella-1l.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pepsi 300ml",
            'precio_puntos' => '16',
            'canje_puntos' => '1',
            'imagen' => 'https://wongfood.vteximg.com.br/arquivos/ids/353732-1000-1000/Pepsi-Black-Botella-355-ml-1-156113.jpg?v=637226146501070000'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Guaraná 500ml",
            'precio_puntos' => '40',
            'canje_puntos' => '1',
            'imagen' => 'https://wongfood.vteximg.com.br/arquivos/ids/353229-1000-1000/749566-1.jpg?v=637219037786730000'
        ]);

        DB::table('productos')->insert([
            'nombre' => "7up 2L",
            'precio_puntos' => '120',
            'canje_puntos' => '2',
            'imagen' => 'https://s.cornershopapp.com/product-images/5172516.jpg?versionId=iz9B2PWphPrmdEJTKpQQdrsyVnoLBEo1'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Big Cola 3L",
            'precio_puntos' => '140',
            'canje_puntos' => '3',
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/530329-450-450/20149161.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "7up 500ml",
            'precio_puntos' => '40',
            'canje_puntos' => '1',
            'imagen' => 'https://wongfood.vteximg.com.br/arquivos/ids/354016-1000-1000/15775-1.jpg?v=637231078531530000'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Inka Cola 2L",
            'precio_puntos' => '80',
            'canje_puntos' => '3',
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/525919-450-450/315845.jpg'
        ]);

        DB::table('productos')->insert([
            'nombre' => "Coca Cola 2L",
            'precio_puntos' => '80',
            'canje_puntos' => '3',
            'imagen' => 'https://plazavea.vteximg.com.br/arquivos/ids/529986-450-450/20100019.jpg'
        ]);
    }
}