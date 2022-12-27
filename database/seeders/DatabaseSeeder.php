<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(CategoriasSeeder::class);
        $this->call(SucursalesSeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(VendedoresSeeder::class);
        $this->call(ProductosSeeder::class);
    }
}
