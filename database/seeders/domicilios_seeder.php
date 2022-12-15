<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class domicilios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=1; $i < 2447; $i++) {
            \DB::table('domicilio')->insert(array(
                'calle' => $faker->cityPrefix,
                'no_interior' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'no_exterior' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'colonia' => $faker->state,
                'cod_postal' => $faker->randomDigit,
                'id_municipio' => $i,
            ));


            /***
             * 'calle' => $request->calle, 'no_interior' => $request->no_interior,
            'no_exterior' => $request->no_exterior, 'colonia' => $request->colonia, 'cod_postal' => $request->cod_postal
            , 'id_municipio' => $request->id_municipio]
             ***/
        }
    }
}
