<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolaridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('escolaridad')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'escolaridad')->insert(array(
            array(
                'escolaridad'=>'Educación Primaria',
            ),array(
                'escolaridad'=>'Educación Secundaria',
            ),array(
                'escolaridad'=>'Educación Media Supe',
            ),array(
                'escolaridad'=>'Educación Superior',
            ),));

    }
}
