<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('municipio')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas


        DB::table('municipio')->insert(array(
            array(
                'municipio' => "Aguascalientes",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Asientos",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Calvillo",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Cosío",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "El Llano",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Jesús Maria",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Pabellón de Arteaga",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Rincón de Romos",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "San Francisco de los Romo",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "San José de Gracia",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Tepezalá",
                'id_estado' => "1",
            ),
            array(
                'municipio' => "Ensenada",
                'id_estado' => "2",
            ),
            array(
                'municipio' => "Mexicali",
                'id_estado' => "2",
            ),
            array(
                'municipio' => "Playas de Rosarito",
                'id_estado' => "2",
            ),
            array(
                'municipio' => "Tecate",
                'id_estado' => "2",
            ),
            array(
                'municipio' => "Tijuana",
                'id_estado' => "2",
            ),
            array(
                'municipio' => "Comondú",
                'id_estado' => "3",
            ),
            array(
                'municipio' => "La Paz",
                'id_estado' => "3",
            ),
            array(
                'municipio' => "Loreto",
                'id_estado' => "3",
            ),
            array(
                'municipio' => "Los Cabos",
                'id_estado' => "3",
            ),
            array(
                'municipio' => "Mulegé",
                'id_estado' => "3",
            ),
            array(
                'municipio' => "Calakmul",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Calkiní",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Campeche",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Candelaria",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Carmen",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Champotón",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Escárcega",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Hecelchakán",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Hopelchén",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Palizada",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Tenabo",
                'id_estado' => "4",
            ),
            array(
                'municipio' => "Acacoyagua",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Acala",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Acapetahua",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Aldama",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Altamirano",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Amatán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Amatenango de la Frontera",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Amatenango del Valle",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Angel Albino Corzo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Arriaga",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Bejucal de Ocampo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Bella Vista",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Benemérito de las Américas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Berriozábal",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Bochil",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Cacahoatán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Catazajá",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chalchihuitán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chamula",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chanal",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chapultenango",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chenalhó",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chiapa de Corzo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chiapilla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chicoasén",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Chicomuselo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Chilón",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Cintalapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Coapilla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Comitán de Domínguez",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Copainalá",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
El Bosque",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
El Porvenir",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Escuintla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Francisco León",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Frontera Comalapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Frontera Hidalgo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Huehuetán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Huitiupán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Huixtán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Huixtla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ixhuatán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ixtacomitán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ixtapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ixtapangajoya",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Jiquipilas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Jitotol",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Juárez",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
La Concordia",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
La Grandeza",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
La Independencia",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
La Libertad",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
La Trinitaria",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Larráinzar",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Las Margaritas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Las Rosas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Mapastepec",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Maravilla Tenejapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Marqués de Comillas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Mazapa de Madero",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Mazatán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Metapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Mitontic",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Montecristo de Guerrero",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Motozintla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Nicolás Ruíz",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ocosingo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ocotepec",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ocozocoautla de Espinosa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Ostuacán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Osumacinta",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Oxchuc",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Palenque",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Pantelhó",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Pantepec",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Pichucalco",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Pijijiapan",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Pueblo Nuevo Solistahuacán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Rayón",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Reforma",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Sabanilla",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Salto de Agua",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
San Andrés Duraznal",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
San Cristóbal de las Casas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
San Fernando",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
San Juan Cancuc",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
San Lucas",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Santiago el Pinar",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Siltepec",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Simojovel",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Sitalá",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Socoltenango",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Solosuchiapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Soyaló",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Suchiapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Suchiate",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Sunuapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tapachula",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tapalapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tapilula",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tecpatán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tenejapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Teopisca",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tila",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tonalá",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Totolapa",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tumbalá",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tuxtla Chico",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tuxtla Gutiérrez",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tuzantán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Tzimol",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Unión Juárez",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Venustiano Carranza",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Villa Comaltitlán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Villa Corzo",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Villaflores",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "
Yajalón",
                'id_estado' => "5",
            ),
            array(
                'municipio' => " Zinacantán",
                'id_estado' => "5",
            ),
            array(
                'municipio' => "Ahumada",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Aldama",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Allende",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Aquiles Serdán",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Ascensión",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Bachíniva",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Balleza",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Batopilas",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Bocoyna",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Buenaventura",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Camargo",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Carichí",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Casas Grandes",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Chihuahua",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Chínipas",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Coronado",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Coyame del Sotol",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Cuauhtémoc",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Cusihuiriachi",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Delicias",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Dr. Belisario Domínguez",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "El Tule",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Galeana",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Gómez Farías",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Gran Morelos",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Guachochi",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Guadalupe",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Guadalupe y Calvo",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Guazapares",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Guerrero",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Hidalgo del Parral",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Huejotitán",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Ignacio Zaragoza",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Janos",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Jiménez",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Juárez",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Julimes",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
La Cruz",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
López",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Madera",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Maguarichi",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Manuel Benavides",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Matachí",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Matamoros",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Meoqui",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Morelos",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Moris",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Namiquipa",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Nonoava",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Nuevo Casas Grandes",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Ocampo",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Ojinaga",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Praxedis G. Guerrero",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Riva Palacio",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Rosales",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Rosario",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
San Francisco de Borja",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
San Francisco de Conchos",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
San Francisco del Oro",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Santa Bárbara",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Santa Isabel",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Satevó",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Saucillo",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Temósachic",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "
Urique",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Uruachi",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Valle de Zaragoza",
                'id_estado' => "6",
            ),
            array(
                'municipio' => "Álvaro Obregón",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Azcapotzalco",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Benito Juárez",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Coyoacán",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Cuajimalpa de Morelos",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Cuauhtémoc",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Gustavo A. Madero",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Iztacalco",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Iztapalapa",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
La Magdalena Contreras",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Miguel Hidalgo",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Milpa Alta",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Tláhuac",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Tlalpan",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "
Venustiano Carranza",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "Xochimilco",
                'id_estado' => "7",
            ),
            array(
                'municipio' => "Canatlán",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "Canelas",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Coneto de Comonfort",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Cuencamé",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Durango",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
El Oro",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
General Simón Bolívar",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Gómez Palacio",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Guadalupe Victoria",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Guanaceví",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Hidalgo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Indé",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Lerdo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Mapimí",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Mezquital",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Nazas",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Nombre de Dios",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Nuevo Ideal",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Ocampo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Otáez",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Pánuco de Coronado",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Peñón Blanco",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Poanas",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Pueblo Nuevo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Rodeo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Bernardo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Dimas",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Juan de Guadalupe",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Juan del Río",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Luis del Cordero",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
San Pedro del Gallo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Santa Clara",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Santiago Papasquiaro",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Súchil",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Tamazula",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Tepehuanes",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Tlahualilo",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "
Topia",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "Vicente Guerrero",
                'id_estado' => "10",
            ),
            array(
                'municipio' => "Acuña",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "Allende",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Arteaga",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Candela",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Castaños",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Cuatro Ciénegas",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Escobedo",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Francisco I. Madero",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Frontera",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
General Cepeda",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Guerrero",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Hidalgo",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Jiménez",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Juárez",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Lamadrid",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Matamoros",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Monclova",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Morelos",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Múzquiz",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Nadadores",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Nava",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Ocampo",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Parras",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Piedras Negras",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Progreso",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Ramos Arizpe",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Sabinas",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Sacramento",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Saltillo",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
San Buenaventura",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
San Juan de Sabinas",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
San Pedro",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Sierra Mojada",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Torreón",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Viesca",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "
Villa Unión",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "Zaragoza",
                'id_estado' => "8",
            ),
            array(
                'municipio' => "Armería",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "Colima",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "Comala",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "Coquimatlán",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "
Cuauhtémoc",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "
Ixtlahuacán",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "
Manzanillo",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "
Minatitlán",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "
Tecomán",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "Villa de Álvarez",
                'id_estado' => "9",
            ),
            array(
                'municipio' => "Abasolo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "Acámbaro",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Apaseo el Alto",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Apaseo el Grande",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Atarjea",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Celaya",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Comonfort",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Coroneo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Cortazar",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Cuerámaro",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Doctor Mora",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Dolores Hidalgo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Guanajuato",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Huanímaro",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Irapuato",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Jaral del Progreso",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Jerécuaro",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
León",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Manuel Doblado",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Moroleón",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Ocampo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Pénjamo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Pueblo Nuevo",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Purísima del Rincón",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Romita",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Salamanca",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Salvatierra",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San Diego de la Unión",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San Felipe",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San Francisco del Rincón",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San José Iturbide",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San Luis de la Paz",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
San Miguel de Allende",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Santa Catarina",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Santa Cruz de Juventino Rosas",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Santiago Maravatío",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Silao de la Victoria",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Tarandacuao",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Tarimoro",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Tierra Blanca",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Uriangato",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Valle de Santiago",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Victoria",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Villagrán",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "
Xichú",
                'id_estado' => "11",
            ),
            array(
                'municipio' => " Yuriria",
                'id_estado' => "11",
            ),
            array(
                'municipio' => "Acapulco de Juárez",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "Acatepec",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Ahuacuotzingo",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Ajuchitlán del Progreso",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Alcozauca de Guerrero",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Alpoyeca",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Apaxtla",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Arcelia",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Atenango del Río",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Atlamajalcingo del Monte",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Atlixtac",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Atoyac de Álvarez",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Ayutla de los Libres",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Azoyú",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Benito Juárez",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Buenavista de Cuéllar",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Chilapa de Álvarez",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Chilpancingo de los Bravo",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Coahuayutla de José María Izazaga",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cochoapa el Grande",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cocula",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Copala",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Copalillo",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Copanatoyac",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Coyuca de Benítez",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Coyuca de Catalán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cuajinicuilapa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cualác",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cuautepec",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cuetzala del Progreso",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Cutzamala de Pinzón",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Eduardo Neri",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Florencio Villarreal",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
General Canuto A. Neri",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
General Heliodoro Castillo",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Huamuxtitlán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Huitzuco de los Figueroa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Iguala de la Independencia",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Igualapa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Iliatenco",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Ixcateopan de Cuauhtémoc",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
José Joaquín de Herrera",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Juan R. Escudero",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Juchitán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
La Unión de Isidoro Montes de Oca",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Leonardo Bravo",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Malinaltepec",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Marquelia",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Mártir de Cuilapan",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Metlatónoc",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Mochitlán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Olinalá",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Ometepec",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Pedro Ascencio Alquisiras",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Petatlán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Pilcaya",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Pungarabato",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Quechultenango",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
San Luis Acatlán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
San Marcos",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
San Miguel Totolapan",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Taxco de Alarcón",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tecoanapa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Técpan de Galeana",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Teloloapan",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tepecoacuilco de Trujano",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tetipac",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tixtla de Guerrero",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlacoachistlahuaca",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlacoapa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlalchapa",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlalixtaquilla de Maldonado",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlapa de Comonfort",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Tlapehuala",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Xalpatláhuac",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Xochihuehuetlán",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Xochistlahuaca",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Zapotitlán Tablas",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Zihuatanejo de Azueta",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "
Zirándaro",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "Zitlala",
                'id_estado' => "12",
            ),
            array(
                'municipio' => "Acatlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "Acaxochitlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Actopan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Agua Blanca de Iturbide",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Ajacuba",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Alfajayucan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Almoloya",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Apan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Atitalaquia",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Atlapexco",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Atotonilco de Tula",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Atotonilco el Grande",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Calnali",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Cardonal",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Chapantongo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Chapulhuacán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Chilcuautla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Cuautepec de Hinojosa",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
El Arenal",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Eloxochitlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Emiliano Zapata",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Epazoyucan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Francisco I. Madero",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huasca de Ocampo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huautla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huazalingo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huehuetla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huejutla de Reyes",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Huichapan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Ixmiquilpan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Jacala de Ledezma",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Jaltocán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Juárez Hidalgo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
La Misión",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Lolotla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Metepec",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Metztitlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Mineral de la Reforma",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Mineral del Chico",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Mineral del Monte",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Mixquiahuala de Juárez",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Molango de Escamilla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Nicolás Flores",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Nopala de Villagrán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Omitlán de Juárez",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Pachuca de Soto",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Pacula",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Pisaflores",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Progreso de Obregón",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
San Agustín Metzquititlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
San Agustín Tlaxiaca",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
San Bartolo Tutotepec",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
San Felipe Orizatlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "San Salvador",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "Santiago de Anaya",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "Santiago Tulantepec de Lugo Guerrero",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Singuilucan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tasquillo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tecozautla",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tenango de Doria",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tepeapulco",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tepehuacán de Guerrero",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tepeji del Río de Ocampo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tepetitlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tetepango",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tezontepec de Aldama",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tianguistengo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tizayuca",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tlahuelilpan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tlahuiltepa",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tlanalapa",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tlanchinol",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tlaxcoapan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tolcayuca",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tula de Allende",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Tulancingo de Bravo",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Villa de Tezontepec",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Xochiatipan",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Xochicoatlán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Yahualica",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Zacualtipán de Ángeles",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Zapotlán de Juárez",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "
Zempoala",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "Zimapán",
                'id_estado' => "13",
            ),
            array(
                'municipio' => "Acatic",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Acatlán de Juárez",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ahualulco de Mercado",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Amacueca",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Amatitán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ameca",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Arandas",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Atemajac de Brizuela",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Atengo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Atenguillo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Atotonilco el Alto",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Atoyac",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Autlán de Navarro",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ayotlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ayutla",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Bolaños",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cabo Corrientes",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Casimiro Castillo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Chapala",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Chimaltitán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Chiquilistlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cihuatlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cocula",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Colotlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Concepción de Buenos Aires",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cuautitlán de García Barragán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cuautla",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Cuquío",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Degollado",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ejutla",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
El Arenal",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
El Grullo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
El Limón",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
El Salto",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Encarnación de Díaz",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Etzatlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Gómez Farías",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Guachinango",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Guadalajara",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Hostotipaquillo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Huejúcar",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Huejuquilla el Alto",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ixtlahuacán de los Membrillos",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ixtlahuacán del Río",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Jalostotitlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Jamay",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Jesús María",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Jilotlán de los Dolores",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Jocotepec",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Juanacatlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Juchitlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
La Barca",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
La Huerta",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
La Manzanilla de la Paz",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Lagos de Moreno",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Magdalena",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Mascota",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Mazamitla",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Mexticacán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Mezquitic",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Mixtlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ocotlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Ojuelos de Jalisco",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Pihuamo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Poncitlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Puerto Vallarta",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Quitupan",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Cristóbal de la Barranca",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Diego de Alejandría",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Gabriel",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Juan de los Lagos",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Juanito de Escobedo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Julián",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Marcos",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Martín de Bolaños",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Martín Hidalgo",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Miguel el Alto",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Pedro Tlaquepaque",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
San Sebastián del Oeste",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Santa María de los Ángeles",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Santa María del Oro",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "Sayula",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "Tala",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Talpa de Allende",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tamazula de Gordiano",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tapalpa",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tecalitlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Techaluta de Montenegro",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tecolotlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tenamaxtlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Teocaltiche",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Teocuitatlán de Corona",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tepatitlán de Morelos",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tequila",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Teuchitlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tizapán el Alto",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tlajomulco de Zúñiga",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tolimán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tomatlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tonalá",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tonaya",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tonila",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Totatiche",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tototlán",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tuxcacuesco",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tuxcueca",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Tuxpan",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Unión de San Antonio",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Unión de Tula",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Valle de Guadalupe",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Valle de Juárez",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "
Villa Purificación",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "Zapotlán el Grande",
                'id_estado' => "14",
            ),
            array(
                'municipio' => "Acambay de Ruíz Castañeda",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "Acolman",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Aculco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Almoloya de Alquisiras",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Almoloya de Juárez",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Almoloya del Río",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Amanalco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Amatepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Amecameca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Apaxco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Atenco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Atizapán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Atizapán de Zaragoza",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Atlacomulco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Atlautla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Axapusco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ayapango",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Calimaya",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Capulhuac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chalco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chapa de Mota",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chapultepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chiautla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chicoloapan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chiconcuac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Chimalhuacán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Coacalco de Berriozábal",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Coatepec Harinas",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Cocotitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Coyotepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Cuautitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Cuautitlán Izcalli",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Donato Guerra",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ecatepec de Morelos",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ecatzingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
El Oro",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Huehuetoca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Hueypoxtla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Huixquilucan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Isidro Fabela",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ixtapaluca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ixtapan de la Sal",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ixtapan del Oro",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ixtlahuaca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Jaltenco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Jilotepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Jilotzingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Jiquipilco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Jocotitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Joquicingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Juchitepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
La Paz",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Lerma",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Luvianos",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Malinalco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Melchor Ocampo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Metepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Mexicaltzingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Morelos",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Naucalpan de Juárez",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Nextlalpan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Nezahualcóyotl",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Nicolás Romero",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Nopaltepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ocoyoacac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ocuilan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Otumba",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Otzoloapan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Otzolotepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Ozumba",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Papalotla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Polotitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Rayón",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San Antonio la Isla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San Felipe del Progreso",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San José del Rincón",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San Martín de las Pirámides",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San Mateo Atenco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
San Simón de Guerrero",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Santo Tomás",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Soyaniquilpan de Juárez",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Sultepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tecámac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tejupilco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Temamatla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Temascalapa",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Temascalcingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Temascaltepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Temoaya",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tenancingo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tenango del Aire",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tenango del Valle",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Teoloyucan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Teotihuacán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tepetlaoxtoc",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tepetlixpa",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tepotzotlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tequixquiac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Texcaltitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Texcalyacac",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Texcoco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tezoyuca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tianguistenco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Timilpan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tlalmanalco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tlalnepantla de Baz",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tlatlaya",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Toluca",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tonanitla",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tonatico",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tultepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Tultitlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Valle de Bravo",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Valle de Chalco Solidaridad",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Villa de Allende",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Villa del Carbón",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Villa Guerrero",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Villa Victoria",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Xalatlaco",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Xonacatlán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Zacazonapan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Zacualpan",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Zinacantepec",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "
Zumpahuacán",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "Zumpango",
                'id_estado' => "15",
            ),
            array(
                'municipio' => "Acuitzio",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "Aguililla",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Álvaro Obregón",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Angamacutiro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Angangueo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Apatzingán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Aporo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Aquila",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Ario",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Arteaga",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Briseñas",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Buenavista",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Carácuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Charapan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Charo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Chavinda",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Cherán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Chilchota",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Chinicuila",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Chucándiro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Churintzio",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Churumuco",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Coahuayana",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Coalcomán de Vázquez Pallares",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Coeneo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Cojumatlán de Régules",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Contepec",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Copándaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Cotija",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Cuitzeo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Ecuandureo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Epitacio Huerta",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Erongarícuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Gabriel Zamora",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Hidalgo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Huandacareo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Huaniqueo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Huetamo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Huiramba",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Indaparapeo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Irimbo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Ixtlán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Jacona",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Jiménez",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Jiquilpan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
José Sixto Verduzco",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Juárez",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Jungapeo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
La Huacana",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
La Piedad",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Lagunillas",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Lázaro Cárdenas",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Los Reyes",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Madero",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Maravatío",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Marcos Castellanos",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Morelia",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Morelos",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Múgica",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Nahuatzen",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Nocupétaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Nuevo Parangaricutiro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Nuevo Urecho",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Numarán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Ocampo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Pajacuarán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Panindícuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Paracho",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Parácuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Pátzcuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Penjamillo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Peribán",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Purépero",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Puruándiro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Queréndaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Quiroga",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Sahuayo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Salvador Escalante",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
San Lucas",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Santa Ana Maya",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Senguio",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Susupuato",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tacámbaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tancítaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tangamandapio",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tangancícuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tanhuato",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Taretan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tarímbaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tepalcatepec",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tingambato",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tingüindín",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tiquicheo de Nicolás Romero",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tlalpujahua",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tlazazalca",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tocumbo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tumbiscatío",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Turicato",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tuxpan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tuzantla",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tzintzuntzan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Tzitzio",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Uruapan",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Venustiano Carranza",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Villamar",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Vista Hermosa",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Yurécuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Zacapu",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Zamora",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Zináparo",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Zinapécuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "
Ziracuaretiro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "Zitácuaro",
                'id_estado' => "16",
            ),
            array(
                'municipio' => "AMACUZAC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
ATLATLAHUCAN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
AXOCHIAPAN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
AYALA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
COATLÁN DEL RÍO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
CUAUTLA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
CUERNAVACA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
EMILIANO ZAPATA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
HUITZILAC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
JANTETELCO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
JIUTEPEC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
JOJUTLA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
JONACATEPEC DE LEANDRO VALLE",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
MAZATEPEC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
MIACATLÁN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
OCUITUCO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
PUENTE DE IXTLA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TEMIXCO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TEPALCINGO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TEPOZTLÁN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TETECALA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TETELA DEL VOLCÁN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TLALNEPANTLA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TLALTIZAPÁN DE ZAPATA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TLAQUILTENANGO",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TLAYACAPAN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
TOTOLAPAN",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
XOCHITEPEC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
YAUTEPEC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
YECAPIXTLA",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
ZACATEPEC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "
ZACUALPAN DE AMILPAS",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "TEMOAC",
                'id_estado' => "17",
            ),
            array(
                'municipio' => "ACAPONETA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "AHUACATLÁN",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
AMATLÁN DE CAÑAS",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
COMPOSTELA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
HUAJICORI",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
IXTLÁN DEL RÍO",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
JALA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
XALISCO",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
DEL NAYAR",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
ROSAMORADA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
RUÍZ",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
SAN BLAS",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
SAN PEDRO LAGUNILLAS",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
SANTA MARÍA DEL ORO",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
SANTIAGO IXCUINTLA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
TECUALA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
TEPIC",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
TUXPAN",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "
LA YESCA",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "BAHÍA DE BANDERAS",
                'id_estado' => "18",
            ),
            array(
                'municipio' => "ABASOLO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
AGUALEGUAS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
LOS ALDAMAS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
ALLENDE",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
ANÁHUAC",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
APODACA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
ARAMBERRI",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
BUSTAMANTE",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
CADEREYTA JIMÉNEZ",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
EL CARMEN",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
CERRALVO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
CIÉNEGA DE FLORES",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
CHINA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
DOCTOR ARROYO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
DOCTOR COSS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
DOCTOR GONZÁLEZ",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GALEANA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GARCÍA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SAN PEDRO GARZA GARCÍA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL BRAVO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL ESCOBEDO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL TERÁN",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL TREVIÑO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL ZARAGOZA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GENERAL ZUAZUA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
GUADALUPE",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
LOS HERRERAS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
HIGUERAS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
HUALAHUISES",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
ITURBIDE",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
JUÁREZ",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
LAMPAZOS DE NARANJO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
LINARES",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MARÍN",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MELCHOR OCAMPO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MIER Y NORIEGA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MINA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MONTEMORELOS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
MONTERREY",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
PARÁS",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
PESQUERÍA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
LOS RAMONES",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
RAYONES",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SABINAS HIDALGO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SALINAS VICTORIA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SAN NICOLÁS DE LOS GARZA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
HIDALGO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SANTA CATARINA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
SANTIAGO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "
VALLECILLO",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "VILLALDAMA",
                'id_estado' => "19",
            ),
            array(
                'municipio' => "ABEJONES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ACATLÁN DE PÉREZ FIGUEROA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN CACALOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN CUYOTEPEJI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN IXTALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN NOCHIXTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN OCOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ASUNCIÓN TLACOLULITA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
AYOTZINTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
EL BARRIO DE LA SOLEDAD",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CALIHUALÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CANDELARIA LOXICHA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CIÉNEGA DE ZIMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CIUDAD IXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
COATECAS ALTAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
COICOYÁN DE LAS FLORES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
LA COMPAÑÍA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CONCEPCIÓN BUENAVISTA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CONCEPCIÓN PÁPALO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CONSTANCIA DEL ROSARIO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
COSOLAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
COSOLTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CUILÁPAM DE GUERRERO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CUYAMECALCO VILLA DE ZARAGOZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CHAHUITES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CHALCATONGO DE HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CHIQUIHUITLÁN DE BENITO JUÁREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HEROICA CIUDAD DE EJUTLA DE CRESPO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ELOXOCHITLÁN DE FLORES MAGÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
EL ESPINAL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TAMAZULÁPAM DEL ESPÍRITU SANTO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
FRESNILLO DE TRUJANO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
GUADALUPE ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
GUADALUPE DE RAMÍREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
GUELATAO DE JUÁREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
GUEVEA DE HUMBOLDT",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MESONES HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HEROICA CIUDAD DE HUAJUAPAN DE LEÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HUAUTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HUAUTLA DE JIMÉNEZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
IXTLÁN DE JUÁREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HEROICA CIUDAD DE JUCHITÁN DE ZARAGOZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
LOMA BONITA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA APASCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA JALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MAGDALENA JICOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA OCOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA PEÑASCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA TEITIPAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA TEQUISISTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA TLACOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA ZAHUATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MARISCALA DE JUÁREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MÁRTIRES DE TACUBAYA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MATÍAS ROMERO AVENDAÑO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAZATLÁN VILLA DE FLORES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MIAHUATLÁN DE PORFIRIO DÍAZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MIXISTLÁN DE LA REFORMA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MONJAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
NATIVIDAD",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
NAZARENO ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
NEJAPA DE MADERO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
IXPANTEPEC NIEVES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO NILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
OAXACA DE JUÁREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
OCOTLÁN DE MORELOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
LA PE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
PINOTEPA DE DON LUIS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
PLUMA HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ DEL PROGRESO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
PUTLA VILLA DE GUERRERO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA QUIOQUITANI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
REFORMA DE PINEDA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
LA REFORMA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
REYES ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ROJAS DE CUAUHTÉMOC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SALINA CRUZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN AMATENGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN ATENANGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN CHAYUCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN DE LAS JUNTAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN LOXICHA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN TLACOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN AGUSTÍN YATARENI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS CABECERA NUEVA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS DINICUITI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS HUAXPALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS HUAYÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS IXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS LAGUNAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS NUXIÑO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS PAXTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS SINAXTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS SOLAGA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS TEOTILÁLPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS TEPETLAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS YAÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS ZABACHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANDRÉS ZAUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONINO CASTILLO VELASCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONINO EL ALTO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONINO MONTE VERDE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO ACUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO DE LA CAL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO HUITEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO NANAHUATÍPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO SINICAHUA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ANTONIO TEPETLAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BALTAZAR CHICHICÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BALTAZAR LOXICHA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BALTAZAR YATZACHI EL BAJO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLO COYOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLOMÉ AYAUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLOMÉ LOXICHA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLOMÉ QUIALANA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLOMÉ YUCUAÑE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLOMÉ ZOOGOCHO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLO SOYALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BARTOLO YAUTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BERNARDO MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN BLAS ATEMPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN CARLOS YAUTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN CRISTÓBAL AMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN CRISTÓBAL AMOLTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN CRISTÓBAL LACHIRIOAG",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN CRISTÓBAL SUCHIXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN DIONISIO DEL MAR",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN DIONISIO OCOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN DIONISIO OCOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ESTEBAN ATATLAHUCA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FELIPE JALAPA DE DÍAZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FELIPE TEJALÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FELIPE USILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO CAHUACUÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO CAJONOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO CHAPULAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO CHINDÚA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO DEL MAR",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO HUEHUETLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO IXHUATÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO JALTEPETONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO LACHIGOLÓ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO LOGUECHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO NUXAÑO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO OZOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO SOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO TELIXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO TEOPAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN FRANCISCO TLAPANCINGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN GABRIEL MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ILDEFONSO AMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ILDEFONSO SOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN ILDEFONSO VILLA ALTA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JACINTO AMILPAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JACINTO TLACOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO COATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO SILACAYOAPILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO SOSOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO TAVICHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO TECÓATL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JORGE NUCHITA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ AYUQUILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ CHILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ DEL PEÑASCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ ESTANCIA GRANDE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ INDEPENDENCIA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ LACHIGUIRI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JOSÉ TENANGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN ACHIUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN ATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ÁNIMAS TRUJANO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA ATATLAHUCA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA COIXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA CUICATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA GUELACHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA JAYACATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA LO DE SOTO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA SUCHITEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "SAN JUAN BAUTISTA TLACOATZINTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA TLACHICHILCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA TUXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN CACAHUATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN CIENEGUILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN COATZÓSPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN COLORADO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN COMALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN COTZOCÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN CHICOMEZÚCHIL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN CHILATECA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN DEL ESTADO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN DEL RÍO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN DIUXI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN EVANGELISTA ANALCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN GUELAVÍA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN GUICHICOVI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN IHUALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN JUQUILA MIXES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN JUQUILA VIJANOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN LACHAO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN LACHIGALLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN LAJARCIA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN LALANA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN DE LOS CUÉS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN MAZATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN ÑUMÍ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN OZOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN PETLAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN QUIAHIJE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN QUIOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN SAYULTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TABAÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TAMAZOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TEITA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TEITIPAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TEPEUXILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN TEPOSCOLULA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN YAEÉ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN YATZONA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN YUCUITA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO ALBARRADAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO CACAOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO CUAUNECUILTITLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO TEXMELÚCAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LORENZO VICTORIA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LUCAS CAMOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LUCAS OJITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LUCAS QUIAVINÍ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LUCAS ZOQUIÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN LUIS AMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARCIAL OZOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARCOS ARTEAGA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN DE LOS CANSECOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN HUAMELÚLPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN ITUNYOSO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN LACHILÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN PERAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN TILCAJETE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN TOXPALAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MARTÍN ZACATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO CAJONOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
CAPULÁLPAM DE MÉNDEZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO DEL MAR",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO YOLOXOCHITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO ETLATONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO NEJÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO PEÑASCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO PIÑAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO RÍO HONDO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO SINDIHUI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO TLAPILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MELCHOR BETAZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL ACHIUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL AHUEHUETITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL ALOÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL AMATITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL AMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL COATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL CHICAHUA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL CHIMALAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL DEL PUERTO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL DEL RÍO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL EJUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL EL GRANDE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL HUAUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL PANIXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL PERAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL PIEDRAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL QUETZALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL SANTA FLOR",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA SOLA DE VEGA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL SOYALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL SUCHIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA TALEA DE CASTRO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TECOMATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TENANGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TEQUIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TILQUIÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TLACAMAMA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TLACOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL TULANCINGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MIGUEL YOTAO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN NICOLÁS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN NICOLÁS HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO COATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO CUATRO VENADOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO HUITZO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO HUIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO MACUILTIANGUIS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO TIJALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO VILLA DE MITLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PABLO YAGANIZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO AMUZGOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO APÓSTOL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO ATOYAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO CAJONOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO COXCALTEPEC CÁNTAROS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO COMITANCILLO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO EL ALTO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO HUAMELULA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO HUILOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO IXCATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO IXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO JALTEPETONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO JICAYÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO JOCOTIPAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO JUCHATENGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MÁRTIR",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MÁRTIR QUIECHAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MÁRTIR YUCUXACO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO MOLINOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO NOPALA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO OCOPETATILLO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO OCOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO POCHUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO QUIATONI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO SOCHIÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TAPANATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TAVICHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TEOZACOALCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TEUTILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TIDAÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TOPILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO TOTOLÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DE TUTUTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO YANERI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO YÓLOX",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO Y SAN PABLO AYUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DE ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO Y SAN PABLO TEPOSCOLULA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO Y SAN PABLO TEQUIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN PEDRO YUCUNAMA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN RAYMUNDO JALPAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN ABASOLO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN COATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN IXCAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN NICANANDUTA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN RÍO HONDO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN TECOMAXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN TEITIPAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN TUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SIMÓN ALMOLONGAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN SIMÓN ZAHUATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA ATEIXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA CUAUHTÉMOC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA DEL VALLE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA TAVELA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA TLAPACOYAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA YARENI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA ANA ZEGACHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATALINA QUIERÍ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA CUIXTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA IXTEPEJI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA JUQUILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA LACHATAO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA LOXICHA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA MECHOACÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA MINAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA QUIANÉ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA TAYATA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA TICUÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA YOSONOTÚ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CATARINA ZAPOQUILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ ACATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ AMILPAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ DE BRAVO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ ITUNDUJIA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ MIXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ NUNDACO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ PAPALUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ TACACHE DE MINA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ TACAHUA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ TAYATA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ XITLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ XOXOCOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA CRUZ ZENZONTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA GERTRUDIS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA INÉS DEL MONTE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA INÉS YATZECHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA LUCÍA DEL CAMINO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA LUCÍA MIAHUATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA LUCÍA MONTEVERDE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA LUCÍA OCOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ALOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA APAZCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA LA ASUNCIÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
HEROICA CIUDAD DE TLAXIACO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
AYOQUEZCO DE ALDAMA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ATZOMPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA CAMOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA COLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA CORTIJO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA COYOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA CHACHOÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DE CHILAPA DE DÍAZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA CHILCHOTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA CHIMALAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA DEL ROSARIO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA DEL TULE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ECATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA GUELACÉ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA GUIENAGATI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA HUATULCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA HUAZOLOTITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA IPALAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA IXCATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA JACATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA JALAPA DEL MARQUÉS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA JALTIANGUIS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA LACHIXÍO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA MIXTEQUILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA NATIVITAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA NDUAYACO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA OZOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA PÁPALO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA PEÑOLES",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA PETAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA QUIEGOLANI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA SOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TATALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TECOMAVACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TEMAXCALAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TEMAXCALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TEOPOXCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TEPANTLALI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TEXCATITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TLAHUITOLTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TLALIXTAC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TONAMECA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA TOTOLAPILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA XADANI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA YALINA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA YAVESÍA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA YOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA YOSOYÚA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA YUCUHITI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ZACATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ZANIZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA MARÍA ZOQUITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO AMOLTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO APOALA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO APÓSTOL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO ASTATA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO ATITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO AYUQUILILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO CACALOXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO CAMOTLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO COMALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO CHAZUMBA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO CHOÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO DEL RÍO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO HUAJOLOTITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO HUAUCLILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO IHUITLÁN PLUMAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO IXCUINTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO IXTAYUTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO JAMILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO JOCOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO JUXTLAHUACA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO LACHIGUIRI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO LALOPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO LAOLLAGA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO LAXOPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO LLANO GRANDE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO MATATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO MILTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO MINAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO NACALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO NEJAPILLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO NUNDICHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO NUYOÓ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO PINOTEPA NACIONAL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO SUCHILQUITONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TAMAZOLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TAPEXTLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA TEJÚPAM DE LA UNIÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TENANGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TEPETLAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TETEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TEXCALCINGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TEXTITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TILANTONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TILLO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO TLAZOYALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO XANICA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO XIACUÍ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO YAITEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO YAVEO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO YOLOMÉCATL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO YOSONDÚA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO YUCUYACHI",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO ZACATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTIAGO ZOOCHILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
NUEVO ZOQUIÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO INGENIO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO ALBARRADAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO ARMENTA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO CHIHUITÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO DE MORELOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO IXCATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO NUXAÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO OZOLOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO PETAPA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO ROAYAGA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "SANTO DOMINGO TEHUANTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "SANTO DOMINGO TEOJOMULCO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "SANTO DOMINGO TEPUXTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO TLATAYÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO TOMALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO TONALÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO TONALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO XAGACÍA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO YANHUITLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO YODOHINO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO DOMINGO ZANATEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTOS REYES NOPALA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTOS REYES PÁPALO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTOS REYES TEPEJILLO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTOS REYES YUCUNÁ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO TOMÁS JALIEZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO TOMÁS MAZALTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO TOMÁS OCOTEPEC",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTO TOMÁS TAMAZULAPAN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN VICENTE COATLÁN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN VICENTE LACHIXÍO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN VICENTE NUÑÚ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SILACAYOÁPAM",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SITIO DE XITLAPEHUA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SOLEDAD ETLA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DE TAMAZULÁPAM DEL PROGRESO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TANETZE DE ZARAGOZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TANICHE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TATALTEPEC DE VALDÉS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TEOCOCUILCO DE MARCOS PÉREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TEOTITLÁN DE FLORES MAGÓN",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TEOTITLÁN DEL VALLE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TEOTONGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TEPELMEME VILLA DE MORELOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA TEZOATLÁN DE SEGURA Y LUNA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO TLACOCHAHUAYA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TLACOLULA DE MATAMOROS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TLACOTEPEC PLUMAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TLALIXTAC DE CABRERA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TOTONTEPEC VILLA DE MORELOS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
TRINIDAD ZAACHILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
LA TRINIDAD VISTA HERMOSA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
UNIÓN HIDALGO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VALERIO TRUJANO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN JUAN BAUTISTA VALLE NACIONAL",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DÍAZ ORDAZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
YAXE",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
MAGDALENA YODOCONO DE PORFIRIO DÍAZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
YOGANA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
YUTANDUCHI DE GUERRERO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
VILLA DE ZAACHILA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SAN MATEO YUCUTINDOO",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ZAPOTITLÁN LAGUNAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
ZAPOTITLÁN PALMAS",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "
SANTA INÉS DE ZARAGOZA",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "ZIMATLÁN DE ÁLVAREZ",
                'id_estado' => "20",
            ),
            array(
                'municipio' => "ACAJETE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "ACATENO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ACATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ACATZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ACTEOPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AHUACATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AHUATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AHUAZOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AHUEHUETITLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AJALPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ALBINO ZERTUCHE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ALJOJUCA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ALTEPEXI",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AMIXTLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AMOZOC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AQUIXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATEMPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATEXCAL",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATLIXCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATOYATEMPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATZALA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATZITZIHUACÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATZITZINTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AXUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
AYOTOXCO DE GUERRERO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CALPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CALTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CAMOCUAUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CAXHUACAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COATEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COATZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COHETZALA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COHUECAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CORONANGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COXCATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COYOMEAPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
COYOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUAPIAXTLA DE MADERO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUAUTEMPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUAUTINCHÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUAUTLANCINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUAYUCA DE ANDRADE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUETZALAN DEL PROGRESO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CUYOACO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHALCHICOMULA DE SESMA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHAPULCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIAUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIAUTZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHICONCUAUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHICHIQUILA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIETLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIGMECATITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIGNAHUAPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHIGNAUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHILA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHILA DE LA SAL",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HONEY",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHILCHOTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CHINANTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
DOMINGO ARENAS",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ELOXOCHITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
EPATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ESPERANZA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
FRANCISCO Z. MENA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
GENERAL FELIPE ÁNGELES",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
GUADALUPE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
GUADALUPE VICTORIA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HERMENEGILDO GALEANA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUAQUECHULA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUATLATLAUCA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUAUCHINANGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEHUETLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEHUETLÁN EL CHICO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEJOTZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEYAPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEYTAMALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEYTLALPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUITZILAN DE SERDÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUITZILTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ATLEQUIZAYAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
IXCAMILPA DE GUERRERO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
IXCAQUIXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
IXTACAMAXTITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
IXTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
IZÚCAR DE MATAMOROS",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JALPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JOLALPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JONOTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JOPALA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JUAN C. BONILLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JUAN GALINDO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
JUAN N. MÉNDEZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
LAFRAGUA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
LIBRES",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
LA MAGDALENA TLATLAUQUITEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
MAZAPILTEPEC DE JUÁREZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
MIXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
MOLCAXAC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
CAÑADA MORELOS",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
NAUPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
NAUZONTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
NEALTICAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
NICOLÁS BRAVO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
NOPALUCAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
OCOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
OCOYUCAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
OLINTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ORIENTAL",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PAHUATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PALMAR DE BRAVO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PANTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PETLALCINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PIAXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
PUEBLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
QUECHOLAC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
QUIMIXTLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
RAFAEL LARA GRAJALES",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
LOS REYES DE JUÁREZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN ANDRÉS CHOLULA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN ANTONIO CAÑADA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN DIEGO LA MESA TOCHIMILTZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN FELIPE TEOTLALCINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN FELIPE TEPATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN GABRIEL CHILAC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN GREGORIO ATZOMPA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO TECUANIPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO XAYACATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JOSÉ CHIAPA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JOSÉ MIAHUATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JUAN ATENCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN JUAN ATZOMPA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN MARTÍN TEXMELUCAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN MARTÍN TOTOLTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN MATÍAS TLALANCALECA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN MIGUEL IXITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN MIGUEL XOXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN NICOLÁS BUENOS AIRES",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN NICOLÁS DE LOS RANCHOS",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN PABLO ANICANO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN PEDRO CHOLULA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN PEDRO YELOIXTLAHUACA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN SALVADOR EL SECO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN SALVADOR EL VERDE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN SALVADOR HUIXCOLOTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SAN SEBASTIÁN TLACOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SANTA CATARINA TLALTEMPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SANTA INÉS AHUATEMPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SANTA ISABEL CHOLULA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SANTIAGO MIAHUATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
HUEHUETLÁN EL GRANDE",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SANTO TOMÁS HUEYOTLIPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
SOLTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "TECALI DE HERRERA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "TECAMACHALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TECOMATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEHUACÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEHUITZINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TENAMPULCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEOPANTLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEOTLALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPANCO DE LÓPEZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPANGO DE RODRÍGUEZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPATLAXCO DE HIDALGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEACA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEMAXALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEOJUMA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPETZINTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEXCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEXI DE RODRÍGUEZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEYAHUALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEPEYAHUALCO DE CUAUHTÉMOC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TETELA DE OCAMPO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TETELES DE AVILA CASTILLO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TEZIUTLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TIANGUISMANALCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TILAPA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLACOTEPEC DE BENITO JUÁREZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLACUILOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLACHICHUCA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLAHUAPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLALTENANGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLANEPANTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLAOLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLAPACOYA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLAPANALÁ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLATLAUQUITEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TLAXCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TOCHIMILCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TOCHTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TOTOLTEPEC DE GUERRERO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TULCINGO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TUZAMAPAN DE GALEANA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
TZICATLACOYAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
VENUSTIANO CARRANZA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
VICENTE GUERRERO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XAYACATLÁN DE BRAVO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XICOTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XICOTLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XIUTETELCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XOCHIAPULCO",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XOCHILTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XOCHITLÁN DE VICENTE SUÁREZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
XOCHITLÁN TODOS SANTOS",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
YAONÁHUAC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
YEHUALTEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZACAPALA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZACAPOAXTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZACATLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZAPOTITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZAPOTITLÁN DE MÉNDEZ",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZARAGOZA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZAUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZIHUATEUTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZINACATEPEC",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZONGOZOTLA",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "
ZOQUIAPAN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "ZOQUITLÁN",
                'id_estado' => "21",
            ),
            array(
                'municipio' => "AMEALCO DE BONFIL",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "PINAL DE AMOLES",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
ARROYO SECO",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
CADEREYTA DE MONTES",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
COLÓN",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
CORREGIDORA",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
EZEQUIEL MONTES",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
HUIMILPAN",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
JALPAN DE SERRA",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
LANDA DE MATAMOROS",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
EL MARQUÉS",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
PEDRO ESCOBEDO",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "
PEÑAMILLER",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "QUERÉTARO",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "SAN JOAQUÍN",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "SAN JUAN DEL RÍO",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "TEQUISQUIAPAN",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "TOLIMÁN",
                'id_estado' => "22",
            ),
            array(
                'municipio' => "COZUMEL",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "FELIPE CARRILLO PUERTO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
ISLA MUJERES",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
OTHÓN P. BLANCO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
BENITO JUÁREZ",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
JOSÉ MARÍA MORELOS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
LÁZARO CÁRDENAS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
SOLIDARIDAD",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
TULUM",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
BACALAR",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
PUERTO MORELOS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
SAN LUIS POTOSÍ",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
AHUALULCO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
ALAQUINES",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
AQUISMÓN",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
ARMADILLO DE LOS INFANTE",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CÁRDENAS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CATORCE",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CEDRAL",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CERRITOS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CERRO DE SAN PEDRO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CIUDAD DEL MAÍZ",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CIUDAD FERNÁNDEZ",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
TANCANHUITZ",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CIUDAD VALLES",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
COXCATLÁN",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
CHARCAS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
EBANO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
GUADALCÁZAR",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
HUEHUETLÁN",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
LAGUNILLAS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
MATEHUALA",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
MEXQUITIC DE CARMONA",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
MOCTEZUMA",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
RAYÓN",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
RIOVERDE",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
SALINAS",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "
SAN ANTONIO",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "SAN CIRO DE ACOSTA",
                'id_estado' => "23",
            ),
            array(
                'municipio' => "SAN MARTÍN CHALCHICUAUTLA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "SAN NICOLÁS TOLENTINO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
SANTA CATARINA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
SANTA MARÍA DEL RÍO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
SANTO DOMINGO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
SAN VICENTE TANCUAYALAB",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
SOLEDAD DE GRACIANO SÁNCHEZ",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TAMASOPO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TAMAZUNCHALE",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TAMPACÁN",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TAMPAMOLÓN CORONA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TAMUÍN",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TANLAJÁS",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TANQUIÁN DE ESCOBEDO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
TIERRA NUEVA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VANEGAS",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VENADO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE ARRIAGA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE GUADALUPE",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE LA PAZ",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE RAMOS",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE REYES",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA HIDALGO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA JUÁREZ",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
AXTLA DE TERRAZAS",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
XILITLA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
ZARAGOZA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
VILLA DE ARISTA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "
MATLAPA",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "EL NARANJO",
                'id_estado' => "24",
            ),
            array(
                'municipio' => "AHOME",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
ANGOSTURA",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
BADIRAGUATO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
CONCORDIA",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
COSALÁ",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
CULIACÁN",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
CHOIX",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
ELOTA",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
ESCUINAPA",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
EL FUERTE",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
GUASAVE",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
MAZATLÁN",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
MOCORITO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
ROSARIO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
SALVADOR ALVARADO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
SAN IGNACIO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "
SINALOA",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "NAVOLATO",
                'id_estado' => "25",
            ),
            array(
                'municipio' => "ACONCHI",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
AGUA PRIETA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ALAMOS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ALTAR",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ARIVECHI",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ARIZPE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ATIL",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BACADÉHUACHI",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BACANORA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BACERAC",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BACOACHI",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BÁCUM",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BANÁMICHI",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BAVIÁCORA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BAVISPE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BENJAMÍN HILL",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CABORCA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CAJEME",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CANANEA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CARBÓ",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
LA COLORADA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CUCURPE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
CUMPAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
DIVISADEROS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
EMPALME",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ETCHOJOA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
FRONTERAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
GRANADOS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
GUAYMAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
HERMOSILLO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
HUACHINERA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
HUÁSABAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
HUATABAMPO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
HUÉPAC",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
IMURIS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
MAGDALENA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
MAZATÁN",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
MOCTEZUMA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
NACO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
NÁCORI CHICO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
NACOZARI DE GARCÍA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
NAVOJOA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
NOGALES",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ONAVAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
OPODEPE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
OQUITOA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
PITIQUITO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
PUERTO PEÑASCO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
QUIRIEGO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
RAYÓN",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
ROSARIO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAHUARIPA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAN FELIPE DE JESÚS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAN JAVIER",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAN LUIS RÍO COLORADO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAN MIGUEL DE HORCASITAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SAN PEDRO DE LA CUEVA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SANTA ANA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SANTA CRUZ",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SÁRIC",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SOYOPA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
SUAQUI GRANDE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
TEPACHE",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
TRINCHERAS",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
TUBUTAMA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
URES",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
VILLA HIDALGO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
VILLA PESQUEIRA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
YÉCORA",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
GENERAL PLUTARCO ELÍAS CALLES",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "
BENITO JUÁREZ",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "SAN IGNACIO RÍO MUERTO",
                'id_estado' => "26",
            ),
            array(
                'municipio' => "BALANCÁN",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "CÁRDENAS",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
CENTLA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
CENTRO",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
COMALCALCO",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
CUNDUACÁN",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
EMILIANO ZAPATA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
HUIMANGUILLO",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
JALAPA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
JALPA DE MÉNDEZ",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
JONUTA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
MACUSPANA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
NACAJUCA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
PARAÍSO",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
TACOTALPA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "
TEAPA",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "TENOSIQUE",
                'id_estado' => "27",
            ),
            array(
                'municipio' => "ABASOLO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "ALDAMA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
ALTAMIRA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
ANTIGUO MORELOS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
BURGOS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
BUSTAMANTE",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
CAMARGO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
CASAS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
CIUDAD MADERO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
CRUILLAS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
GÓMEZ FARÍAS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
GONZÁLEZ",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
GÜÉMEZ",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
GUERRERO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
GUSTAVO DÍAZ ORDAZ",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
HIDALGO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
JAUMAVE",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
JIMÉNEZ",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
LLERA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MAINERO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
EL MANTE",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MATAMOROS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MÉNDEZ",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MIER",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MIGUEL ALEMÁN",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
MIQUIHUANA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
NUEVO LAREDO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
NUEVO MORELOS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
OCAMPO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
PADILLA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
PALMILLAS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
REYNOSA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
RÍO BRAVO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "SAN CARLOS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "SAN FERNANDO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "SAN NICOLÁS",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
SOTO LA MARINA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
TAMPICO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
TULA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
VALLE HERMOSO",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
VICTORIA",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "
VILLAGRÁN",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "XICOTÉNCATL",
                'id_estado' => "28",
            ),
            array(
                'municipio' => "AMAXAC DE GUERRERO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "APETATITLÁN DE ANTONIO CARVAJAL",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ATLANGATEPEC",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ATLTZAYANCA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
APIZACO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
CALPULALPAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
EL CARMEN TEQUEXQUITLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
CUAPIAXTLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
CUAXOMULCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
CHIAUTEMPAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
MUÑOZ DE DOMINGO ARENAS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ESPAÑITA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
HUAMANTLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
HUEYOTLIPAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
IXTACUIXTLA DE MARIANO MATAMOROS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
IXTENCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
MAZATECOCHCO DE JOSÉ MARÍA MORELOS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
CONTLA DE JUAN CUAMATZI",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TEPETITLA DE LARDIZÁBAL",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANCTÓRUM DE LÁZARO CÁRDENAS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
NANACAMILPA DE MARIANO ARISTA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ACUAMANALA DE MIGUEL HIDALGO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
NATÍVITAS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
PANOTLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN PABLO DEL MONTE",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANTA CRUZ TLAXCALA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TENANCINGO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TEOLOCHOLCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TEPEYANCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TERRENATE",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "TETLA DE LA SOLIDARIDAD",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TETLATLAHUCA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TLAXCALA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TLAXCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TOCATLÁN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TOTOLAC",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ZILTLALTÉPEC DE TRINIDAD SÁNCHEZ SANTOS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
TZOMPANTEPEC",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
XALOZTOC",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
XALTOCAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
PAPALOTLA DE XICOHTÉNCATL",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
XICOHTZINCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
YAUHQUEMEHCAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
ZACATELCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
BENITO JUÁREZ",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
EMILIANO ZAPATA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
LÁZARO CÁRDENAS",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
LA MAGDALENA TLALTELULCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN DAMIÁN TEXÓLOC",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN FRANCISCO TETLANOHCAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN JERÓNIMO ZACUALPAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN JOSÉ TEACALCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN JUAN HUACTZINCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN LORENZO AXOCOMANITLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SAN LUCAS TECOPILCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANTA ANA NOPALUCAN",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANTA APOLONIA TEACALCO",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANTA CATARINA AYOMETLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "
SANTA CRUZ QUILEHTLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "SANTA ISABEL XILOXOXTLA",
                'id_estado' => "29",
            ),
            array(
                'municipio' => "ACAJETE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "ACATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ACAYUCAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ACTOPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ACULA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ACULTZINGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CAMARÓN DE TEJEDA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ALPATLÁHUAC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ALTO LUCERO DE GUTIÉRREZ BARRIOS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ALTOTONGA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ALVARADO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
AMATITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NARANJOS AMATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
AMATLÁN DE LOS REYES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ANGEL R. CABADA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LA ANTIGUA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
APAZAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
AQUILA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ASTACINGA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ATLAHUILCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ATOYAC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ATZACAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ATZALAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLALTETELA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
AYAHUALULCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
BANDERILLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
BENITO JUÁREZ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
BOCA DEL RÍO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CALCAHUALCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CAMERINO Z. MENDOZA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CARRILLO PUERTO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CATEMACO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CAZONES DE HERRERA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CERRO AZUL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CITLALTÉPETL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COACOATZINTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COAHUITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COATEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COATZACOALCOS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COATZINTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COETZALA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COLIPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COMAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CÓRDOBA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COSAMALOAPAN DE CARPIO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COSAUTLÁN DE CARVAJAL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COSCOMATEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COSOLEACAQUE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COTAXTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COXQUIHUI",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
COYUTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CUICHAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CUITLÁHUAC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHACALTIANGUIS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHALMA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHICONAMEL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHICONQUIACO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHICONTEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHINAMECA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHINAMPA DE GOROSTIZA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LAS CHOAPAS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHOCAMÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHONTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CHUMATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
EMILIANO ZAPATA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ESPINAL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
FILOMENO MATA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
FORTÍN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
GUTIÉRREZ ZAMORA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
HIDALGOTITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
HUATUSCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
HUAYACOCOTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
HUEYAPAN DE OCAMPO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
HUILOAPAN DE CUAUHTÉMOC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IGNACIO DE LA LLAVE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ILAMATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ISLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXCATEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXHUACÁN DE LOS REYES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXHUATLÁN DEL CAFÉ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXHUATLANCILLO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXHUATLÁN DEL SURESTE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXHUATLÁN DE MADERO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXMATLAHUACAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
IXTACZOQUITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JALACINGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
XALAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JALCOMULCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JÁLTIPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JAMAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JESÚS CARRANZA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
XICO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JILOTEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JUAN RODRÍGUEZ CLARA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JUCHIQUE DE FERRER",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LANDERO Y COSS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LERDO DE TEJADA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MAGDALENA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MALTRATA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MANLIO FABIO ALTAMIRANO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MARIANO ESCOBEDO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MARTÍNEZ DE LA TORRE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MECATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MECAYAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MEDELLÍN DE BRAVO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MIAHUATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LAS MINAS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MINATITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MISANTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MIXTLA DE ALTAMIRANO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
MOLOACÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NAOLINCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NARANJAL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NAUTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NOGALES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
OLUTA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
OMEALCA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ORIZABA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
OTATITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
OTEAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
OZULUAMA DE MASCAREÑAS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PAJAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PÁNUCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PAPANTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PASO DEL MACHO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PASO DE OVEJAS",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LA PERLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PEROTE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PLATÓN SÁNCHEZ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PLAYA VICENTE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
POZA RICA DE HIDALGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LAS VIGAS DE RAMÍREZ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PUEBLO VIEJO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
PUENTE NACIONAL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
RAFAEL DELGADO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
RAFAEL LUCIO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
LOS REYES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
RÍO BLANCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SALTABARRANCA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SAN ANDRÉS TENEJAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SAN ANDRÉS TUXTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SAN JUAN EVANGELISTA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SANTIAGO TUXTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SAYULA DE ALEMÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SOCONUSCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SOCHIAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SOLEDAD ATZOMPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SOLEDAD DE DOBLADO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SOTEAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TAMALÍN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TAMIAHUA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TAMPICO ALTO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TANCOCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TANTIMA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TANTOYUCA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TATATILA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CASTILLO DE TEAYO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TECOLUTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEHUIPANGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ÁLAMO TEMAPACHE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEMPOAL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TENAMPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TENOCHTITLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEOCELO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEPATLAXCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEPETLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEPETZINTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEQUILA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
JOSÉ AZUETA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEXCATEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEXHUACÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEXISTEPEC",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TEZONAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TIERRA BLANCA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TIHUATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLACOJALPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLACOLULAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLACOTALPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLACOTEPEC DE MEJÍA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLACHICHILCO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLALIXCOYAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLALNELHUAYOCAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLAPACOYAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLAQUILPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TLILAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TOMATLÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TONAYÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TOTUTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TUXPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TUXTILLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
URSULO GALVÁN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
VEGA DE ALATORRE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
VERACRUZ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
VILLA ALDAMA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
XOXOCOTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
YANGA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
YECUATLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZACUALPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZARAGOZA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZENTLA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZONGOLICA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZONTECOMATLÁN DE LÓPEZ Y FUENTES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
ZOZOCOLCO DE HIDALGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
AGUA DULCE",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
EL HIGO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
NANCHITAL DE LÁZARO CÁRDENAS DEL RÍO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TRES VALLES",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
CARLOS A. CARRILLO",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
TATAHUICAPAN DE JUÁREZ",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
UXPANAPA",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "
SAN RAFAEL",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "SANTIAGO SOCHIAPAN",
                'id_estado' => "30",
            ),
            array(
                'municipio' => "ABALÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "ACANCEH",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
AKIL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
BACA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
BOKOBÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
BUCTZOTZ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CACALCHÉN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CALOTMUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CANSAHCAB",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CANTAMAYEC",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CELESTÚN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CENOTILLO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CONKAL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CUNCUNUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CUZAMÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHACSINKÍN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHANKOM",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHAPAB",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHEMAX",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHICXULUB PUEBLO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHICHIMILÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHIKINDZONOT",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHOCHOLÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
CHUMAYEL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZÁN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZEMUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZIDZANTÚN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZILAM DE BRAVO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZILAM GONZÁLEZ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZITÁS",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
DZONCAUICH",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
ESPITA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HALACHÓ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HOCABÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HOCTÚN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HOMÚN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HUHÍ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
HUNUCMÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
IXIL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
IZAMAL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
KANASÍN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
KANTUNIL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
KAUA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
KINCHIL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
KOPOMÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MAMA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MANÍ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MAXCANÚ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MAYAPÁN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MÉRIDA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MOCOCHÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MOTUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MUNA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
MUXUPIP",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
OPICHÉN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
OXKUTZCAB",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
PANABÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
PETO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
PROGRESO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
QUINTANA ROO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
RÍO LAGARTOS",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SACALUM",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SAMAHIL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SANAHCAT",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SAN FELIPE",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SANTA ELENA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SEYÉ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SINANCHÉ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SOTUTA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SUCILÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SUDZAL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
SUMA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TAHDZIÚ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TAHMEK",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEABO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TECOH",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEKAL DE VENEGAS",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEKANTÓ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEKAX",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEKIT",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEKOM",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TELCHAC PUEBLO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TELCHAC PUERTO",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEMAX",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEMOZÓN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEPAKÁN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TETIZ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TEYA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TICUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIMUCUY",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TINUM",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIXCACALCUPUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIXKOKOB",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIXMEHUAC",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIXPÉHUAL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TIZIMÍN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TUNKÁS",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
TZUCACAB",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
UAYMA",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
UCÚ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
UMÁN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
VALLADOLID",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
XOCCHEL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
YAXCABÁ",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "
YAXKUKUL",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "YOBAÍN",
                'id_estado' => "31",
            ),
            array(
                'municipio' => "APOZOL",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "APULCO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
ATOLINGA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
BENITO JUÁREZ",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
CALERA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
CAÑITAS DE FELIPE PESCADOR",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
CONCEPCIÓN DEL ORO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
CUAUHTÉMOC",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
CHALCHIHUITES",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
FRESNILLO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TRINIDAD GARCÍA DE LA CADENA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
GENARO CODINA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
GENERAL ENRIQUE ESTRADA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
GENERAL FRANCISCO R. MURGUÍA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
EL PLATEADO DE JOAQUÍN AMARO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
GENERAL PÁNFILO NATERA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
GUADALUPE",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
HUANUSCO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
JALPA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
JEREZ",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
JIMÉNEZ DEL TEUL",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
JUAN ALDAMA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
JUCHIPILA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
LORETO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
LUIS MOYA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MAZAPIL",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MELCHOR OCAMPO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MEZQUITAL DEL ORO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MIGUEL AUZA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MOMAX",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MONTE ESCOBEDO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MORELOS",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
MOYAHUA DE ESTRADA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
NOCHISTLÁN DE MEJÍA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
NORIA DE ÁNGELES",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
OJOCALIENTE",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
PÁNUCO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
PINOS",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
RÍO GRANDE",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
SAIN ALTO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
EL SALVADOR",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
SOMBRERETE",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
SUSTICACÁN",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TABASCO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TEPECHITLÁN",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TEPETONGO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TEÚL DE GONZÁLEZ ORTEGA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
TLALTENANGO DE SÁNCHEZ ROMÁN",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
VALPARAÍSO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
VETAGRANDE",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
VILLA DE COS",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
VILLA GARCÍA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "
VILLA GONZÁLEZ ORTEGA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "VILLA HIDALGO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "VILLANUEVA",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "ZACATECAS",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "TRANCOSO",
                'id_estado' => "32",
            ),
            array(
                'municipio' => "SANTA MARÍA DE LA PAZ",
                'id_estado' => "32",
            ),
        ));
    }
}
