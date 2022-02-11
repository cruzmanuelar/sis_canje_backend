<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => "Manuel",
            'correo' => 'cruzmanuelar@gmail.com',
            'dni' => '123456',
            'password' => Hash::make('manuel2022'),
        ]);
        DB::table('users')->insert([
            'nombre' => "Cruz",
            'correo' => 'manuel@gmail.com',
            'dni' => '654321',
            'password' => Hash::make('2022manuel'),
        ]);
        DB::table('users')->insert([
            'nombre' => "billgates",
            'correo' => 'billy@gmail.com',
            'dni' => '99999',
            'password' => Hash::make('windows'),
        ]);
        DB::table('users')->insert([
            'nombre' => "musk",
            'correo' => 'tesla@gmail.com',
            'dni' => '98789',
            'password' => Hash::make('elonmusk'),
        ]);
    }
}
