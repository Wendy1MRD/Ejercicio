<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Productos')->insert([
            'nombre' => 'Plano Plano NP2',
            'precio' => '250',
            'stock' => '10',
            'idCategoria' => '1',
            'idProveedor' => '1'
        ]);

        DB::table('Productos')->insert([
            'nombre' => 'Dije de Venado',
            'precio' => '3800',
            'stock' => '20',
            'idCategoria' => '2',
            'idProveedor' => '2'
        ]);

        DB::table('Productos')->insert([
            'nombre' => 'Perro-GOM',
            'precio' => '820',
            'stock' => '20',
            'idCategoria' => '3',
            'idProveedor' => '4'
        ]);

        DB::table('Productos')->insert([
            'nombre' => 'Tlacuache #231',
            'precio' => '12300',
            'stock' => '1',
            'idCategoria' => '4',
            'idProveedor' => '3'
        ]);

    }
}
