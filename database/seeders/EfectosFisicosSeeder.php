<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfectosFisicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('efectos_fisicos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'efecto_fisico';
        DB::table( 'efectos_fisicos')->insert(array(
            array(
                $str=>' Aborto',),
            array(
                $str=>'Amputaciones/ Avulsión',),
            array(
                $str =>'Cicatrices',),
            array(
                $str =>'Congelamiento', ),
            array(
                $str =>'Contusión/ Hematoma',),
            array(
                $str =>'Dolor de cabeza',),
            array(
                $str =>'Fractura',),
            array(
                $str =>'Herida',),
            array(
                $str =>'Laceración/ Abrasión', ),
            array(
                $str =>'Muerte', ),
            array(
                $str =>'Quemadura',),
            array(
                $str =>'Ninguno', ),
            array(
                $str =>'Otro',),
            ));




    }
}
