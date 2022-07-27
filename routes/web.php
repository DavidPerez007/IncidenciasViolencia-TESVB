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
        return view('template.plantilla');
       //return view('dashboard');
    })->name('dashboard');
});


<<<<<<< HEAD
Route::get("sexo", \App\Http\Livewire\Sexos::class);
=======
>>>>>>> a9f2ec608771337b4f7b01c4b6bb4d257bb2faa0

Route::get( "dificultad", \App\Http\Livewire\Dificultades::class);

Route::get("sexo", \App\Http\Livewire\Sexos::class);


Route::get("sexo", \App\Http\Livewire\Sexos::class);



Route::get("pais",\App\Http\Livewire\Paises::class);


Route::get("nacionalidad",\App\Http\Livewire\Nacionalidades::class);
<<<<<<< HEAD

Route::get("tipo_apoyo",\App\Http\Livewire\TipoApoyos::class);

Route::get("servicio_medico",\App\Http\Livewire\ServicioMedicos::class);
=======
>>>>>>> a9f2ec608771337b4f7b01c4b6bb4d257bb2faa0

Route::get("vivienda",\App\Http\Livewire\Viviendas::class);



