<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('damnificados_id')->unsigned()->nullable();
            $table->integer('donante_id')->unsigned();
            $table->integer('siniestros_id')->unsigned();
            $table->integer('acopios_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('donante_id')->references('id')->on('donantes');
            $table->foreign('siniestros_id')->references('id')->on('siniestros');
            $table->foreign('acopios_id')->references('id')->on('acopios');
            $table->foreign('damnificados_id')->references('id')->on('damnificados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donaciones');
    }
}
