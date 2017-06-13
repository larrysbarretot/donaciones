<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresAfectadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares_afectados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siniestros_id')->unsigned();
            $table->integer('lugares_id')->unsigned();
            $table->timestamps();

            $table->foreign('siniestros_id')->references('id')->on('siniestros');
            $table->foreign('lugares_id')->references('id')->on('lugares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares_afectados');
    }
}
