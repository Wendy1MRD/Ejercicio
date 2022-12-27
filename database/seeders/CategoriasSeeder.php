<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categorias')->insert([
            'categoria' => 'Ceramica',
            'descripcion' => 'Piezas de barro'
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Joyeria',
            'descripcion' => 'Piezas de objetos preciosos '
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Otros Artesanos',
            'descripcion' => 'Piezas de otros artesanos de diferentes lugares'
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Piezas Finas',
            'descripcion' => 'Piezas fabricadas por el taller'
        ]);
    }
}
