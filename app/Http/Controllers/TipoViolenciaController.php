<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoViolencia;

class TipoViolenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_violencia = TipoViolencia::all();

        return view ('catalogos.tipo-violencia',[

            'tipo_violencia'=> $tipo_violencia,

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
        request()->validate(TipoViolencia::$rules);
        $datos_violencia = request()->except(['_token', 'mode']);
        TipoViolencia::insert($datos_violencia);
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
    public function update(Request $request, TipoViolencia $tipo_violencium)
    {

        request()->validate(TipoViolencia::$rules);

        $datos_violencia = request()->except(['_token', '_method']);
        $tipo_violencium-> update ($datos_violencia);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoViolencia $tipo_violencium)
    {
        //dd('fvfv');
        $tipo_violencium->delete();
        return redirect()->back();
    }
}
