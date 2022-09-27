<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EfectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('efectos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'efectos')->insert(array(
            array(
                'efectos'=>' Familiar',
            ),array(
                'efectos'=>'Efectos físicos',
            ),array(
                'efectos'=>'Consecuencias sexuales',
            ),array(
                'efectos'=>'Efectos picológicos',
            ),array(
                'efectos'=>'Efectos económicos',
            ),array(
                'efectos'=>'Agente de la lesión',
            ),array(
                'efectos'=>'Área anatómica lesionada',
            ),));

    }
}
