<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosCompleVictimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_comple_victima', function (Blueprint $table) {
            $table->id('id_datos_compleme_victima');
            $table->unsignedBigInteger('id_datos_econo');
            $table->unsignedBigInteger('id_formacion_edu');
            $table->unsignedBigInteger('id_redes_apoyo');
            $table->unsignedBigInteger('id_salud_fisica');
            $table->foreign('id_datos_econo')->references('id_datos_economicos')->on('datos_economicos');
            $table->foreign('id_formacion_edu')->references('id_formacion_educativa')->on('formacion_educativa');
            $table->foreign('id_redes_apoyo')->references('id_redes_apoyo')->on('redes_apoyo');
            $table->foreign('id_salud_fisica')->references('id_salud_fisica')->on('salud_fisica_vic');
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
        Schema::dropIfExists('datos_comple_victima');
    }
}
