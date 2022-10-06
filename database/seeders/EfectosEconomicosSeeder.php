<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfectosEconomicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        $str1 = 'efectos_economicos';
        DB::table($str1 )->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        $str = 'efecto_economico';
        DB::table($str1)->insert(array(
            array(
                $str=>'Dejó de estudiar',),
            array(
                $str=>'Imposibilidad para trabajar o estudiar',),
            array(
                $str=>'No recibe gasto',),
            array(
                $str =>'No recibe pensión alimenticia',),
            array(
                $str =>'Perdió el empleo', ),
            array(
                $str =>'Perdió propiedades',),
            array(
                $str =>'Ningunno', ),
            array(
                $str =>'Otro', ),
            ));
    }
}
