<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Situacion_ConyugalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('situ_conyugal')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        DB::table( 'situ_conyugal')->insert(array(
            array(
                'situacion_conyugal'=>'Soltero',
            ),array(
                'situacion_conyugal'=>'Casado',
            ),array(
                'situacion_conyugal'=>'En unión libre',
            ),array(
                'situacion_conyugal'=>'Separada o divorciada',
            ),array(
                'situacion_conyugal'=>'Viuda',
            ),));

    }
}
