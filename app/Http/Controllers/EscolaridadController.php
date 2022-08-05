<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escolaridad;

class EscolaridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escolaridades=Escolaridad::all();
        return view('catalogos.escolaridad',
            [
                 'escolaridades' => $escolaridades
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
        
        request()->validate(Escolaridad::$rules);
        $datos_escolaridad = request()->except(['_token','mode']);
        Escolaridad::insert($datos_escolaridad);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escolaridad $escolaridad)
    {
        request()->validate(Escolaridad::$rules);
        $datos_escolaridad = request()->except(['_token','_method']);
        $escolaridad->update($datos_escolaridad);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escolaridad $escolaridad)
    {
        $escolaridad->delete();
        return redirect()->back();
    }
}
