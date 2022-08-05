<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoRelacion;

class TipoRelacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relaciones = TipoRelacion::all();
        return view ('catalogos.tipo-relacion',[

            'relaciones'=>$relaciones,

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
        request()->validate(TipoRelacion::$rules);
        $datos_tiporelacion = request()->except(['_token', 'mode']);
        TipoRelacion::insert($datos_tiporelacion);
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
    public function update(Request $request, TipoRelacion $tipo_relacion)
    {
        $datos_relacion = request()->except(['_token', '_method']);
        $tipo_relacion-> update ($datos_relacion);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoRelacion $tipo_relacion)
    {
        $tipo_relacion->delete();

        return redirect()->back();
    }
}
