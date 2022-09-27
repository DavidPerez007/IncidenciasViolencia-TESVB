<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DificultadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('dificultad')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'dificultad')->insert(array(
            array(
                'dificultad'=>' Familiar',
            ),
            array(
                'dificultad'=>'Enfermedad',

            ),
            array(
                'dificultad'=>'Edad avanzada',
            ),
            array(
                'dificultad'=>'Accidente',

            ),
            array(
                'dificultad'=>'Otro',
            ),
        ));

    }
}
