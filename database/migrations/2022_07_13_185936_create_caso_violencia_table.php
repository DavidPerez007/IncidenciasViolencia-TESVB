<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasoViolenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_violencia', function (Blueprint $table) {
            $table->id('id_caso_violencia');

            $table->unsignedBigInteger('id_registro_caso');
            $table->unsignedBigInteger('id_efectos');

            $table->foreign('id_registro_caso')->references('id_registro_caso')->on('registro_caso');
            $table->foreign('id_efectos')->references('id_efectos')->on('efectos');

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
        Schema::dropIfExists('caso_violencia');
    }
}
