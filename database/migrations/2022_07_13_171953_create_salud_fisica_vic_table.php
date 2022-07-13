<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludFisicaVicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salud_fisica_vic', function (Blueprint $table) {
            $table->id('id_salud_fisica');
            $table->boolean('embarazada');
            $table->string('dif_caminar',30);
            $table->string('dif_ver',30);
            $table->string('dif_mover_manos',30);
            $table->string('dif_aprender',30);
            $table->string('dif_escuchar',30);
            $table->string('dif_acti_cotidiana',30);
            $table->string('proble_emociona',30);
            $table->string('dif_hablar',30);
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
        Schema::dropIfExists('salud_fisica_vic');
    }
}
