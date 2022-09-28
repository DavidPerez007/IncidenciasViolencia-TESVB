<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class MunicipioController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios= Municipio::paginate(25);
        //dd($paises);
        return view('catalogos.municipio',
            [
                'municipios' => $municipios
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(Municipio::$rules);
        $datos_municipio = request()->except(['_token', 'mode']);
        Municipio::insert($datos_municipio);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
