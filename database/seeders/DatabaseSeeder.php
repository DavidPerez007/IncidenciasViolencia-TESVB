<?php

namespace Database\Seeders;

use App\Http\Controllers\MunicipioController;
use Illuminate\Database\Seeder;
use Symfony\Component\VarDumper\Cloner\Data;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([PaisesSeeder::class]);
        $this->call([EstadosSeeder::class]);
        $this->call([MunicipiosSeeder::class]);
        $this->call([NacionalidadesSeeder::class]);
        $this->call([Ambitos_ViolenciaSeeder::class]);
        $this->call([DificultadesSeeder::class]);
        $this->call([EfectosSeeder::class]);
        $this->call([EscolaridadesSeeder::class]);
        $this->call([OcupacionesSeeder::class]);
        $this->call([SexoSeeder::class]);
        $this->call([Situacion_ConyugalSeeder::class]);
        $this->call([Tipo_ApoyoSeeder::class]);
        $this->call([Tipo_RelacionSeeder::class]);
        $this->call([Tipo_ViolenciaSeeder::class]);
        $this->call([ViviendasSeeder::class]);
        $this->call([IdiomasSeeder::class]);
        $this->call([Modalidad_violenciaSeeder::class]);
        $this->call([EfectosFisicosSeeder::class]);
        $this->call([ConsecuenciasSexualeseeder::class]);
        $this->call([EfectosPsicologicosSeeder::class]);
        $this->call([EfectosEconomicosSeeder::class]);
        $this->call([AgentesLesionSeeder::class]);
        $this->call([AreaLesionSeeder::class]);
        $this->call([ServicioMedicoSeeder::class]);
    }
}
