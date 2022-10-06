<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('idioma')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        DB::table('idioma')->insert(array(
            array(
                'idioma_espaniol' => "Espanol",
            ),
            array(
                'idioma_espaniol' => "Náhuatl",
            ),
            array(
                'idioma_espaniol' => "Chol",
            ),
            array(
                'idioma_espaniol' => "Totonaca",
            ),
            array(
                'idioma_espaniol' => "Mazateco",
            ),
            array(
                'idioma_espaniol' => "Mixteco",
            ),
            array(
                'idioma_espaniol' => "Otomí",
            ),
            array(
                'idioma_espaniol' => "Tzotzil",
            ),
            array(
                'idioma_espaniol' => "Tzeltal ",
            ),
            array(
                'idioma_espaniol' => "Maya",
            ),
            array(
                'idioma_espaniol' => "Zapoteco",
            ),
            array(
                'idioma_espaniol' => "Paipai",
            ),
            array(
                'idioma_espaniol' => "Kumiai ",
            ),
            array(
                'idioma_espaniol' => "Cucapá",
            ),
            array(
                'idioma_espaniol' => "Perépecha",
            ),
            ));
    }
}
