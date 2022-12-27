<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'proveedor' => 'Mogote Ceramica',
            'direccion' => 'San Martin Tilcaje',
            'telefono' => 123456
        ]);

        DB::table('proveedores')->insert([
            'proveedor' => 'Joyeria TJYMA',
            'direccion' => 'San Martin Tilcaje',
            'telefono' => 987654
        ]);

        DB::table('proveedores')->insert([
            'proveedor' => 'TJYMA',
            'direccion' => 'San Martin Tilcaje',
            'telefono' => 456789
        ]);

        DB::table('proveedores')->insert([
            'proveedor' => 'Gabriel Ojeda Martinez',
            'direccion' => 'Arrazola',
            'telefono' => 789645
        ]);

        DB::table('proveedores')->insert([
            'proveedor' => 'Carlos Luis Diaz',
            'direccion' => 'San Pedro Martir',
            'telefono' => 854201
        ]);

        DB::table('proveedores')->insert([
            'proveedor' => 'Ana Luisa Ortega',
            'direccion' => 'San Pedro Martir',
            'telefono' => 749232
        ]);

    }
}
