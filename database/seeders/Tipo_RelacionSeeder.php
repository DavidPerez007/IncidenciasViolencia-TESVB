<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_RelacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('tipo_relacion')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'tipo_relacion')->insert(array(
            array(
                'tipo_relacion'=>'Personales y familiares',
            ),array(
                'tipo_relacion'=>'Laboral',
            ),array(
                'tipo_relacion'=>'Docente',
            ),array(
                'tipo_relacion'=>'Comunitario/ Social',
            ),array(
                'tipo_relacion'=>'Intitucional',
            ),array(
                'tipo_relacion'=>'Otro',
            )
       ));
    }
}
