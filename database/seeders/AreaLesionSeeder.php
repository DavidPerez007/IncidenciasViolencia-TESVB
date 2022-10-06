<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaLesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'area_lesion';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'area_lesion';
        DB::table($str1)->insert(array(
            array(
                $str =>'Abdomen', ),
            array(
                $str =>'Cabeza', ),
            array(
                $str =>'Cara', ),
            array(
                $str =>'Columna vertebral', ),
            array(
                $str =>'Cuello', ),
            array(
                $str =>'Espalda', ),
            array(
                $str =>'Extremidades superiores', ),
            array(
                $str =>'Extremidades superiores', ),
            array(
                $str =>'Glúteos', ),
            array(
                $str =>'Manos', ),
            array(
                $str =>'Pelvis', ),
            array(
                $str =>'Pies', ),
            array(
                $str =>'Región anal', ),
            array(
                $str =>'Región bucal', ),
            array(
                $str =>'Región genital', ),
            array(
                $str =>'Región ocular', ),
            array(
                $str =>'Senos', ),
            array(
                $str =>'Torax', ),
            array(
                $str =>'Otro', ),
            ));
    }
}
