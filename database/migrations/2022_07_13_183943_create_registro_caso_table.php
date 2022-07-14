<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_caso', function (Blueprint $table) {
            $table->id('id_registro_caso');
            $table->string('delicuen_organizada', 50) ->nullable();
            $table->boolean('denuncia') ->nullable();
            $table->string('narracion_hechos', 50);
            $table->date('fecha_hechos');
            $table->string('autoridad', 15);

            $table->unsignedBigInteger('id_clas_violencia');
            $table->unsignedBigInteger('id_ambito_violencia');
            $table->unsignedBigInteger('id_domicilio');

            $table->foreign('id_clas_violencia')->references('id_clas_violencia')->on('clas_violencia');
            $table->foreign('id_ambito_violencia')->references('id_ambito_violencia')->on('ambito_violencia');
            $table->foreign('id_domicilio')->references('id_domicilio')->on('domicilio');
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
        Schema::dropIfExists('registro_caso');
    }
}
