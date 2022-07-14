<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasViolenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clas_violencia', function (Blueprint $table) {
            $table->id('id_clas_violencia');
            $table->unsignedBigInteger('id_tipo_violencia');
            $table->unsignedBigInteger('id_modalidad_violencia');
            $table->foreign('id_tipo_violencia')->references('id_tipo_violencia')->on('tipo_violencia');
            $table->foreign('id_modalidad_violencia')->references('id_modalidad_violencia')->on('modalidad_violencia');
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
        Schema::dropIfExists('clas_violencia');
    }
}
