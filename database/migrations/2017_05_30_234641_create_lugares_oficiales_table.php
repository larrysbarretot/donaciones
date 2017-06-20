<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresOficialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares_oficiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siniestros_id')->unsigned();
            $table->integer('acopios_id')->unsigned();
            $table->integer('estado')->unsigned(); // 1: un acopio sirve para un solo siniestro, mientras el tiempo de donaciones dure.
            $table->timestamps();

            $table->foreign('siniestros_id')->references('id')->on('siniestros');
            $table->foreign('acopios_id')->references('id')->on('acopios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares_oficiales');
    }
}
