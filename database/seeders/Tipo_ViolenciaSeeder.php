<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_ViolenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('tipo_violencia')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'tipo_violencia')->insert(array(
            array(
                'tipo_violencia'=>'Económica y patrimonial',
            ),array(
                'tipo_violencia'=>'Psicológica',
            ),array(
                'tipo_violencia'=>'Física',
            ),array(
                'tipo_violencia'=>'Sexual',
            ),array(
                'tipo_violencia'=>'Simbólica',
            ),
            ));

    }
}
