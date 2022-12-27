<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Vendedores')->insert([
            'nombre' => 'Martin',
            'apellidoP' => 'Mendoza',
            'apellidoM' => 'Jimenez',
            'direccion' => 'San Martin',
            'telefono' => '674756'
        ]);

        DB::table('Vendedores')->insert([
            'nombre' => 'Ricardo',
            'apellidoP' => 'Melchor',
            'apellidoM' => 'Santiago',
            'direccion' => 'San Jacinto',
            'telefono' => '845324'
        ]);

        DB::table('Vendedores')->insert([
            'nombre' => 'Pablo',
            'apellidoP' => 'Julian',
            'apellidoM' => 'Santos',
            'direccion' => 'Santo Tomas',
            'telefono' => '632353'
        ]);

        DB::table('Vendedores')->insert([
            'nombre' => 'Yoselin',
            'apellidoP' => 'Juarez',
            'apellidoM' => 'Colmenares',
            'direccion' => 'San Juan',
            'telefono' => '363453'
        ]);

        DB::table('Vendedores')->insert([
            'nombre' => 'Nayeli',
            'apellidoP' => 'Zarate',
            'apellidoM' => 'Ruiz',
            'direccion' => 'Jalatlaco',
            'telefono' => '363453'
        ]);

        
    }
}
