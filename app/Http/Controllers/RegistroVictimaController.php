<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroVictimaController extends Controller
{
    public function create (){
        return view ('vistas.registro_caso_victima');
    }
}
