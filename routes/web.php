<?php

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
    //return view('template.test');
    return view('welcome');
});
Route::get('pagina_prueba',function(){
    return view('template.test');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("sexo", \App\Http\Livewire\Sexos::class);

Route::get( "dificultad", \App\Http\Livewire\Dificultades::class);

Route::get("pais",\App\Http\Livewire\Paises::class);

Route::get("nacionalidad",\App\Http\Livewire\Nacionalidades::class);
