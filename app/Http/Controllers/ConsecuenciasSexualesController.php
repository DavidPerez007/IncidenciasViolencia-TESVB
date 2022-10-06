<?php

namespace App\Http\Controllers;

use App\Models\ConsecuenciasSexuales;
use Illuminate\Http\Request;

class ConsecuenciasSexualesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_consecuencias = ConsecuenciasSexuales::paginate(15);
        return view('catalogos.consecuenciasexual',
            [
                'datos_consecuencias' => $datos_consecuencias
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConsecuenciasSexuales  $consecuenciasSexuales
     * @return \Illuminate\Http\Response
     */
    public function show(ConsecuenciasSexuales $consecuenciasSexuales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConsecuenciasSexuales  $consecuenciasSexuales
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsecuenciasSexuales $consecuenciasSexuales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConsecuenciasSexuales  $consecuenciasSexuales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsecuenciasSexuales $consecuenciasSexuales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConsecuenciasSexuales  $consecuenciasSexuales
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsecuenciasSexuales $consecuenciasSexuales)
    {
        //
    }
}
