<?php

use App\Http\Livewire\Idioma as LivewireIdioma;
use App\Models\idioma;
use App\Http\Livewire\Sexo;
use App\Models\Sexo as ModelsSexo;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template.test');
   // return view('welcome');
});
Route::get('pagina_prueba',function(){
    //return view('template.test');
});
Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
       //return view('dashboard');
    })->name('dashboard');
});


<<<<<<< HEAD

=======
>>>>>>> 08dc7880a5a3960ac091fd7b291cd895cc0da7d1

Route::get("sexo", \App\Http\Livewire\Sexos::class);
Route::get("pais",\App\Http\Livewire\Paises::class);
Route::get("dificultad", \App\Http\Livewire\Dificultades::class);
<<<<<<< HEAD
Route::get("nacionalidad",\App\Http\Livewire\Nacionalidades::class);
=======
<<<<<<< HEAD

Route::get("pais",\App\Http\Livewire\Paises::class);
Route::get("nacionalidad",\App\Http\Livewire\Nacionalidades::class);
Route::get("dificultad", \App\Http\Livewire\Dificultades::class);


=======
>>>>>>> dbcd4cb3688679e0eb68a10d3dff40ad502c9315




>>>>>>> 08dc7880a5a3960ac091fd7b291cd895cc0da7d1
Route::get("tipo_relacion",\App\Http\Livewire\TipoRelaciones::class);
Route::get("situ_conyugal",\App\Http\Livewire\SituConyugales::class);
Route::get("ocupacion",\App\Http\Livewire\Ocupaciones::class);
Route::get("tipo_apoyo",\App\Http\Livewire\TipoApoyos::class);
Route::get("servicio_medico",\App\Http\Livewire\ServicioMedicos::class);
Route::get("ambitoViolencia",\App\Http\Livewire\AmbitosViolencia::class);
Route::get("modalidad_violencia",\App\Http\Livewire\ModalidadesViolencia::class);
Route::get("vivienda",\App\Http\Livewire\Viviendas::class);
Route::get("escolaridad", \App\Http\Livewire\Escolaridades::class);
Route::get("efectos", \App\Http\Livewire\Efectos::class);

Route::get("tipo_violencia", \App\Http\Livewire\TiposViolencia::class);
<<<<<<< HEAD

=======
>>>>>>> 08dc7880a5a3960ac091fd7b291cd895cc0da7d1
Route::get("registro_caso_victima", \App\Http\Livewire\RegistroCasoVictima::class);
Route::get("datos_comp_victima", \App\Http\Livewire\DatosComplementariosVictima::class);
Route::get("caso_violencia", \App\Http\Livewire\CasoViolencia::class);
Route::get('viviendas', function () {
    return view('catalogos.vivienda');
});
Route::get('pais/catalogo',[App\Http\Controllers\CatalogoController::class,'pais']);
Route::resource("catalogo", \App\Http\Controllers\CatalogoController::class);
Route::resource("sexo", \App\Http\Controllers\SexoController::class);

// Route::get('vistas/registro-caso-vistima',[])