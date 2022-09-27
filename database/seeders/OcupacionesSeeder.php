<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OcupacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('ocupacion')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'ocupacion')->insert(array(
            array(
                'actividad_realiza'=>'Estudiante',
            ),array(
                'actividad_realiza'=>'Jubilada/ Pensionada',
            ),array(
                'actividad_realiza'=>'Trabaja en el hogar',
            ),array(
                'actividad_realiza'=>'Trabaja fuera del hogar',
            ),array(
                'actividad_realiza'=>'Otro',
            ),));

    }
}
