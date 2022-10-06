<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsecuenciasSexualeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'con_sexuales';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'con_sexual';
        DB::table($str1)->insert(array(
            array(
                $str=>'Ardor vaginal',),
            array(
                $str=>'Desgarre',),
            array(
                $str =>'Embarazo',),
            array(
                $str =>'Infección de transmisión sexual', ),
            array(
                $str =>'Lesión bucal',),
            array(
                $str =>'Lesión anal',),
            array(
                $str =>'Lesión vaginal',),
            array(
                $str =>'Sangrado',),
            array(
                $str =>'Ningunno', ),
            ));




    }
}
