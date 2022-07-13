<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedesApoyoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes_apoyo', function (Blueprint $table) {
            $table->id('id_redes_apoyo');
            $table->unsignedBigInteger('id_tipo_relacion');
            $table->unsignedBigInteger('id_tipo_apoyo');
            $table->foreign('id_tipo_relacion')->references('id_tiporelacion')->on('tipo_relacion');
            $table->foreign('id_tipo_apoyo')->references('id_tipo_apoyo')->on('tipo_apoyo');
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
        Schema::dropIfExists('redes_apoyo');
    }
}
