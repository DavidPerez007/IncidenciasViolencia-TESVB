<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatoGeneralController;


Route::get('/domicilio/{id}/domicilio', [DatoGeneralController::class,'byProject']);


Route::get('/idioma', [DatoGeneralController::class,'idioma']);

Route::get('/ruta/{id}/rutas', [DatoGeneralController::class,'rutas']);
