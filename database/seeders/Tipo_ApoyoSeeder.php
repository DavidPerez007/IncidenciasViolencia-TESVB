<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_ApoyoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('tipo_apoyo')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'tipo_apoyo')->insert(array(
            array(
                'tipo_apoyo'=>'Económico',
            ),array(
                'tipo_apoyo'=>'Emocional',
            ),array(
                'tipo_apoyo'=>'Estructural',
            ),array(
                'tipo_apoyo'=>'Consejo/ Asesor',
            ),array(
                'tipo_apoyo'=>'Vivienda',
            ),array(
                'tipo_apoyo'=>'Laboral',
            ),array(
                'tipo_apoyo'=>'Alimentario',
            ),array(
                'tipo_apoyo'=>'Religioso',
            ),array(
                'tipo_apoyo'=>'Salud',
            ),array(
                'tipo_apoyo'=>'Manejo médico',
            ),array(
                'tipo_apoyo'=>'Legal',
            ),array(
                'tipo_apoyo'=>'Capacitación',
            ),array(
                'tipo_apoyo'=>'Otro',
            ),));
    }
}
