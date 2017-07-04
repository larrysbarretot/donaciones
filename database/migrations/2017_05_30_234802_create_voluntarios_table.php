<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acopios_id')->unsigned();
            $table->integer('receptores_id')->unsigned();//changed user for voluntario
            $table->integer('estado')->unsigned(); // 1: voluntario en ese acopio EN ESE MOMENTO, 0: voluntario, pero no en ese momento
            $table->timestamps();

            $table->foreign('acopios_id')->references('id')->on('acopios');
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
        Schema::dropIfExists('voluntarios');
    }
}
