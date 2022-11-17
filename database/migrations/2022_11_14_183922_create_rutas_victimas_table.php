<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateRutasVictimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas_victimas', function (Blueprint $table) {
            $table->id('id_ruta_victima');
            $table->string('dependencia',45);
            $table->string('observaciones','100')->nullable('TRUE');
            $table->unsignedBigInteger('id_datos_generales');
            $table->foreign('id_datos_generales')->references('id_datos_generales')->on('datos_generales')->onDelete('cascade');
            $table->date('date')->default (DB::raw('CURRENT_DATE'));
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
        Schema::dropIfExists('rutas_victimas');
    }
}
