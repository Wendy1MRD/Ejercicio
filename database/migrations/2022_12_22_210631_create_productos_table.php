<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('idProducto')->autoIncrement();
            $table->string('nombre', 255);
            $table->string('precio', 255);
            $table->string('stock');
            $table->bigInteger('idCategoria');
            $table->bigInteger('idProveedor');
           
           
            $table->foreign('idCategoria')->references('idCategoria')->on('categorias')->onDelete('cascade');
            $table->foreign('idProveedor')->references('idProveedor')->on('proveedores')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
