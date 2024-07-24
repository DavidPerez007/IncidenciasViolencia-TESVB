<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoviolenciaAndRegistrovictimaRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_violencia_victima', function (Blueprint $table) {
            $table->id('id_violencia_victima');
            $table->unsignedBigInteger('id_registro_victima');
            $table->unsignedBigInteger('id_tipo_violencia');
            $table->timestamps();

            $table->foreign('id_registro_victima')->references('id_registro_victima')->on('registro_victima')->onDelete('cascade');
            $table->foreign('id_tipo_violencia')->references('id_tipo_violencia')->on('tipo_violencia')->onDelete('cascade');

            $table->unique(['id_registro_victima', 'id_tipo_violencia'], 'tipo_violencia_victima_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_violencia_victima');
    }
}
