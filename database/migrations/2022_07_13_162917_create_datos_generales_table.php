<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_generales', function (Blueprint $table) {
            $table->id('id_datos_generales');
            $table->string('nombres',45);
            $table->string('ape_paterno',20);
            $table->string('ape_materno',20);
            $table->unsignedBigInteger('id_situ_conyugal');
            $table->foreign('id_situ_conyugal')->references('id_situ_conyugal')->on('situ_conyugal')->onDelete('cascade');
            $table->unsignedBigInteger('id_sexo');
            $table->foreign('id_sexo')->references('id_sexo')->on('sexo')->onDelete('cascade');
            $table->date('fecha_nacimiento');
            $table->integer('hijos');
            $table->string('telefono',11);
            $table->string('email',45);
            $table->string('grupo_etnico',45);
            $table->unsignedBigInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id_nacionalidad')->on('nacionalidad')->onDelete('cascade');
            $table->unsignedBigInteger('id_idioma');
            $table->foreign('id_idioma')->references('id_idioma')->on('idioma')->onDelete('cascade');
            $table->unsignedBigInteger('id_domicilio');
            $table->foreign('id_domicilio')->references('id_domicilio')->on('domicilio')->onDelete('cascade');
            $table->timestamp('date')->default(now());

            $table->string('nic',30);
            $table->string('nuc',28);
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
        Schema::dropIfExists('datos_generales');
    }
}
