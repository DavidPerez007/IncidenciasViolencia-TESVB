<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
         DB::table('estado')->truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas


        DB::table('estado')->insert(array(
            array(
                'estado' => "Aguascalientes",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Baja California",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Baja California Sur",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Campeche",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Chiapas",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Chihuahua",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Ciudad de México",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Coahuila",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Colima",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Durango",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Guanajuato",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Guerrero",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Hidalgo",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Jalisco",
                'id_pais' => "1",
            ),
            array(
                'estado' => "México",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Michoacán",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Morelos",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Nayarit",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Nuevo León",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Oaxaca",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Puebla",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Querétaro",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Quintana Roo",
                'id_pais' => "1",
            ),
            array(
                'estado' => "San Luis Potosí",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Sinaloa",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Sonora",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Tabasco",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Tamaulipas",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Tlaxcala",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Veracruz",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Yucatán",
                'id_pais' => "1",
            ),
            array(
                'estado' => "Zacatecas",
                'id_pais' => "1",
            ),
        ));
    }
}

