<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentroproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centroproductos')->insert([
            'id_centro' => "1",
            'id_producto' => '1',
            'cantidad' => '4',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "2",
            'id_producto' => '2',
            'cantidad' => '9',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "3",
            'id_producto' => '3',
            'cantidad' => '3',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "4",
            'id_producto' => '4',
            'cantidad' => '5',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "5",
            'id_producto' => '5',
            'cantidad' => '7',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "6",
            'id_producto' => '6',
            'cantidad' => '3',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "1",
            'id_producto' => '6',
            'cantidad' => '9',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "2",
            'id_producto' => '5',
            'cantidad' => '13',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "3",
            'id_producto' => '4',
            'cantidad' => '33',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "4",
            'id_producto' => '3',
            'cantidad' => '20',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "5",
            'id_producto' => '2',
            'cantidad' => '11',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "6",
            'id_producto' => '1',
            'cantidad' => '10',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "1",
            'id_producto' => '12',
            'cantidad' => '22',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "2",
            'id_producto' => '11',
            'cantidad' => '3',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "3",
            'id_producto' => '10',
            'cantidad' => '14',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "4",
            'id_producto' => '9',
            'cantidad' => '31',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "5",
            'id_producto' => '8',
            'cantidad' => '21',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "6",
            'id_producto' => '7',
            'cantidad' => '12',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "1",
            'id_producto' => '7',
            'cantidad' => '34',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "2",
            'id_producto' => '8',
            'cantidad' => '23',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "3",
            'id_producto' => '9',
            'cantidad' => '53',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "4",
            'id_producto' => '10',
            'cantidad' => '16',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "5",
            'id_producto' => '11',
            'cantidad' => '15',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "6",
            'id_producto' => '12',
            'cantidad' => '19',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "1",
            'id_producto' => '3',
            'cantidad' => '34',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "2",
            'id_producto' => '4',
            'cantidad' => '23',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "3",
            'id_producto' => '1',
            'cantidad' => '53',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "4",
            'id_producto' => '6',
            'cantidad' => '16',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "5",
            'id_producto' => '3',
            'cantidad' => '15',
        ]);
        DB::table('centroproductos')->insert([
            'id_centro' => "6",
            'id_producto' => '9',
            'cantidad' => '19',
        ]);
    }
}
