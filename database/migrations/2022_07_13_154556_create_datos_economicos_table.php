<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_economicos', function (Blueprint $table) {
            $table->id('id_datos_economicos');
            $table->boolean('fuente_ingresos');
            $table->unsignedBigInteger('id_vivienda');
            $table->unsignedBigInteger('id_servicio_medico');
            $table->unsignedBigInteger('id_actividad_realiza');
            $table->foreign('id_actividad_realiza')->references('id_actividad_realiza')->on('ocupacion');
            $table->foreign('id_vivienda')->references('id_vivienda')->on('vivienda');
            $table->foreign('id_servicio_medico')->references('id_servicio_medico')->on('servicio_medico');
            $table->softDeletes();
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
        Schema::dropIfExists('datos_economicos');
    }
}
