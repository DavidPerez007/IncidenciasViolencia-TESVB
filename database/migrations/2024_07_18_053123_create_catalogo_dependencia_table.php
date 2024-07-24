<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoDependenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id('id_dependencia');
            $table->string('dependencia', 45);
            $table->timestamps();
        });

        Schema::table('datos_generales', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dependencia')->nullable();

            $table->foreign('id_dependencia')
                  ->references('id_dependencia')
                  ->on('dependencias')
                  ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar la clave foránea y la columna id_dependencia de la tabla datos_generales
        Schema::table('datos_generales', function (Blueprint $table) {
            $table->dropForeign(['id_dependencia']);
            $table->dropColumn('id_dependencia');
        });

        // Eliminar la tabla dependencias
        Schema::dropIfExists('dependencias');
    }
}


