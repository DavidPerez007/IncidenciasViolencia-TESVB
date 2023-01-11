<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_No_AuthController extends Controller
{
    public function index()
    {
        return view('componentes.catalogos.Admin.user_no_aut');

    }
}
