<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ViviendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('vivienda')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas


        DB::table('vivienda')->insert(array(
            array(
                'vivienda' => "Propia",

            ),
            array(
                'vivienda' => "Prestada",
            ),
            array(
                'vivienda' => "Rentada",
            ),
        ));
    }
}
