<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfectosPsicologicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'efectos_psicologicos';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'efecto_psicologicos';
        DB::table($str1)->insert(array(
            array(
                $str=>'Angustía o miedo',),
            array(
                $str=>'Depresión',),
            array(
                $str=>'Estrés postraumático',),
            array(
                $str =>'Intento suicida',),
            array(
                $str =>'Problemas nerviosos', ),
            array(
                $str =>'Transtorno del sueño',),
            array(
                $str =>'Transtorno de ansiedad',),
            array(
                $str =>'Transtornos psiquiátricos',),
            array(
                $str =>'Tristeza o aflicción',),
            array(
                $str =>'Pérdida o aumento de apetito', ),
            array(
                $str =>'Ningunno', ),
            array(
                $str =>'Ideación suicida', ),
            array(
                $str =>'Otro', ),
            ));
    }
}
