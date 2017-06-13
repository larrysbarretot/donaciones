<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('codigo')->unique()->nullable();
            $table->integer('cantidad');
            $table->integer('entregado');
            $table->integer('siniestros_id')->unsigned();
            $table->integer('acopios_id')->unsigned();
            $table->integer('categorias_productos_id')->unsigned();
            $table->integer('subcategorias_productos_id')->unsigned();
            $table->integer('receptores_id')->unsigned()->nullable();
            $table->integer('donantes_id')->unsigned();
            $table->timestamps();

            $table->foreign('donantes_id')->references('id')->on('donantes');
            $table->foreign('siniestros_id')->references('id')->on('siniestros');
            $table->foreign('categorias_productos_id')->references('id')->on('categorias_productos');
            $table->foreign('subcategorias_productos_id')->references('id')->on('subcategorias_productos');
            $table->foreign('receptores_id')->references('id')->on('receptores');
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
