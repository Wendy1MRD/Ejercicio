<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('idVendedor')->autoIncrement();
            $table->string('nombre', 255);
            $table->string('apellidoP', 255);
            $table->string('apellidoM', 255);
            $table->string('direccion', 255);
            $table->string('telefono');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendedores');
    }
}
