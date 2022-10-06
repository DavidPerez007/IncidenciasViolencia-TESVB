<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Modalidad_violenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('modalidad_violencia')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'modalidad_violencia')->insert(array(
            array(
                'modalidad'=>'Violencia en relación de pareja',
            ),array(
                'modalidad'=>'Feminicidio',
            ),array(
                'modalidad'=>'La trata de personas confines de explotación sexual',
            ),array(
                'modalidad'=>'El acoso sexual en espacios públicos',
            ),array(
                'modalidad'=>'Violencia obstétrica',
            ),array(
                'modalidad'=>'Esterilizaciones forzadas',
            ),array(
                'modalidad'=>'Hostigamiento sexual',
            ),array(
                'modalidad'=>'Acoso político',
            ),array(
                'modalidad'=>'Violencia en conflictos sociales',
            ),array(
                'modalidad'=>'Violencia en conflicto armado',
            ),array(
                'modalidad'=>'Violencia y las tecnologías de la información y comunicación',
            ),array(
                'modalidad'=>'Violencia por orientación sexual',
            ),array(
                'modalidad'=>'Violencia contra mujeres migrantes',
            ),array(
                'modalidad'=>'Violencia contra mujeres con virus de inmunodeficiencia humana – VIH',
            ),array(
                'modalidad'=>'Violencia en mujeres privadas de la libertad',
            ),array(
                'modalidad'=>'Violencia contra mujeres con discapacidad',
            ),
            ));

    }
}
