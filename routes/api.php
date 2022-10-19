<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatoGeneralController;


Route::get('/domicilio/{id}/domicilio', [DatoGeneralController::class,'byProject']);
