<?php

<<<<<<< HEAD
=======

use App\Http\Livewire\Idioma as LivewireIdioma;
use App\Models\idioma;


use App\Http\Livewire\Sexo;
use App\Models\Sexo as ModelsSexo;

>>>>>>> e4ce03cfbcbc667190bb0727ee4e7b6d5631c0c2
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
        return view('template.plantilla');
       //return view('dashboard');
    })->name('dashboard');
});


Route::get("dificultad", \App\Http\Livewire\Dificultades::class);
Route::get("sexo", \App\Http\Livewire\Sexos::class);
<<<<<<< HEAD

Route::get("dificultad", \App\Http\Livewire\Dificultades::class);

=======
Route::get( "dificultad", \App\Http\Livewire\Dificultades::class);
>>>>>>> e4ce03cfbcbc667190bb0727ee4e7b6d5631c0c2
Route::get("pais",\App\Http\Livewire\Paises::class);
Route::get("nacionalidad",\App\Http\Livewire\Nacionalidades::class);
<<<<<<< HEAD

Route::get("tipo_relacion",\App\Http\Livewire\TipoRelaciones::class);

Route::get("situ_conyugal",\App\Http\Livewire\SituConyugales::class);

Route::get("ocupacion",\App\Http\Livewire\Ocupaciones::class);
=======
Route::get("tipo_apoyo",\App\Http\Livewire\TipoApoyos::class);
Route::get("servicio_medico",\App\Http\Livewire\ServicioMedicos::class);
Route::get("ambitoViolencia",\App\Http\Livewire\AmbitosViolencia::class);
Route::get("modalidad_violencia",\App\Http\Livewire\ModalidadesViolencia::class);
Route::get("vivienda",\App\Http\Livewire\Viviendas::class);

Route::get("escolaridad", \App\Http\Livewire\Escolaridades::class);

Route::get("efectos", \App\Http\Livewire\Efectos::class);



>>>>>>> e4ce03cfbcbc667190bb0727ee4e7b6d5631c0c2
