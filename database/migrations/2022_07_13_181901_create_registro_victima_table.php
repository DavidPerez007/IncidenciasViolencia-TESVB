<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroVictimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_victima', function (Blueprint $table) {
            $table->id('id_registro_victima');
            $table->unsignedBigInteger('id_datos_generales');
            $table->foreign('id_datos_generales')->references('id_datos_generales')->on('datos_generales')->onDelete('cascade');
            $table->string('vive_con',20);
            $table->unsignedBigInteger('id_municipio');
            $table->foreign('id_municipio')->references('id_municipio')->on('municipio')->onDelete('cascade');
            $table->string('curp',18);
            $table->unsignedBigInteger('id_domicilio');
            $table->foreign('id_domicilio')->references('id_domicilio')->on('domicilio')->onDelete('cascade');
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
        Schema::dropIfExists('registro_victima');
    }
}
