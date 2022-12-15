<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class datosGenerales_seeder extends Seeder
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
            \DB::table('datos_generales')->insert(array(
                'nombres'=>$faker->firstNameMale,
                'ape_paterno'=>$faker->firstNameFemale,
                'ape_materno'=>$faker->lastName,
                'id_situ_conyugal'=>1,
                'id_sexo'=>2,
                'fecha_nacimiento'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'hijos'=>$faker->randomDigit,
                'telefono'=>$faker->isbn10,
                'email'=>$faker->email,
                'grupo_etnico'=>'No',
                'id_nacionalidad'=>1,
                'id_idioma'=>1,
                'id_domicilio'=>$faker->numberBetween($min = 1, $max = 2446),
                'nic'=>$faker->randomDigit,
                'nuc'=>$faker->randomDigit,
            ));

        //**
        // DB::table('datos_generales')
        //                ->insert([
        //
        //                    ]);
        //**//
    }}
}
