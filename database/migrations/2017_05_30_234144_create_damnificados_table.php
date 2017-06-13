<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDamnificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('damnificados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni');
            $table->integer('lugares_id')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('damnificados');
    }
}
