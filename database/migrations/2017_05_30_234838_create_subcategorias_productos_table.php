<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorias_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('categorias_productos_id')->unsigned();
            $table->timestamps();

            $table->foreign('categorias_productos_id')->references('id')->on('categorias_productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorias_productos');
    }
}
