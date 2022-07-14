<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id('id_registro');
            $table->unsignedBigInteger('id_registro_victima');
            $table->unsignedBigInteger('id_caso_violencia');
            $table->unsignedBigInteger('id_datos_compleme_victima');

            $table->foreign('id_registro_victima')->references('id_registro_victima')->on('registro_victima');
            $table->foreign('id_caso_violencia')->references('id_caso_violencia')->on('caso_violencia');
            $table->foreign('id_datos_compleme_victima')->references('id_datos_compleme_victima')->on('datos_comple_victima');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
