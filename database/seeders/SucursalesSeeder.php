<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sucursales')->insert([
            'sucursal' => 'Voces de Copal',
            'direccion' => 'Oaxaca de Juárez',
            'telefono' => 8320121
        ]);

        DB::table('Sucursales')->insert([
            'sucursal' => 'Conejo Encantado',
            'direccion' => 'Carretera Puerto Ángel',
            'telefono' => 637232
        ]);

        DB::table('Sucursales')->insert([
            'sucursal' => 'TJYMA',
            'direccion' => 'San Martín Tilcajete',
            'telefono' => 5492321
        ]);
    }
}
