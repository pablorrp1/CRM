<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_membresias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios_apps')->onDelete('cascade');
            $table->integer('membresia')->unsigned();
            $table->foreign('membresia')->references('id')->on('membresias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_membresias');
    }
}
