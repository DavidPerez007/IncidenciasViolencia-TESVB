<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ambitos_ViolenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('ambito_violencia')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'ambito_violencia')->insert(array(
            array(
                'ambito'=>' Familiar',

            ),
            array(
                'ambito'=>' Laboral y Docente',

            ),
            array(
                'ambito'=>'En la Comunidad',

            ),
            array(
                'ambito'=>'Institucional',

            ),
            array(
                'ambito'=>'Feminicida',

            ),

        ));
    }
}


