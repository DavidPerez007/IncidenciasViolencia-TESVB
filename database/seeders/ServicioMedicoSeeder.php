<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'servicio_medico';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'servicio_medico';
        DB::table($str1)->insert(array(
            array(
                $str =>'Gobierno estatal', ),
            array(
                $str =>'IMSS', ),
            array(
                $str =>'PEMEX', ),
            array(
                $str =>'ISSSTE', ),
            array(
                $str =>'SEDENA', ),
            array(
                $str =>'SECMAR', ),
            array(
                $str =>'Seguro poular', ),
            array(
                $str =>'Seguro privado', ),
            array(
                $str =>'Ninguno', ),
            array(
                $str =>'Otro', ),
            ));
    }
}
