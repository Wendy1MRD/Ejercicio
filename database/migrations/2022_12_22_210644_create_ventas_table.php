<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('idVenta')->autoIncrement();

         
            $table->string('cliente', 255);
            $table->string('cantidad', 255);
            $table->string('descuento', 255);
            $table->string('total', 255);

            $table->bigInteger('idSucursal');
            $table->bigInteger('idVendedor');
            $table->bigInteger('idProducto');
            $table->timestamps();

            $table->foreign('idSucursal')->references('idSucursal')->on('sucursales')->onDelete('cascade');
            $table->foreign('idVendedor')->references('idVendedor')->on('vendedores')->onDelete('cascade');
            $table->foreign('idProducto')->references('idProducto')->on('productos')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
