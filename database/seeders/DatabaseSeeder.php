<?php

namespace Database\Seeders;

use App\Http\Controllers\MunicipioController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([PaisesSeeder::class]);
        $this->call([EstadosSeeder::class]);
        $this->call([MunicipiosSeeder::class]);
    }
}
