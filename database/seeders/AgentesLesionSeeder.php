<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentesLesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'agentes_lesion';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'agente_lesion';
        DB::table($str1)->insert(array(
            array(
                $str =>'Arma contundente', ),
            array(
                $str =>'Arma de fuego', ),
            array(
                $str =>'Arma punzocortante', ),
            array(
                $str =>'Golpes', ),
            array(
                $str =>'Parte del cuerpo', ),
            array(
                $str =>'Quemaduras', ),
            array(
                $str =>'Otro', ),
            ));
    }
}
