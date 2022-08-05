<?php

namespace App\Http\Controllers;

use App\Models\TipoApoyo;
use Illuminate\Http\Request;

class TipoApoyoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apoyos = TipoApoyo::all();
        return view('catalogos.tipo-apoyo',[

            'apoyos'=> $apoyos,
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
        request()->validate(TipoApoyo::$rules);
        $datos_apoyo = request()->except(['_token', 'mode']);
      TipoApoyo::insert($datos_apoyo);
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
    public function update(Request $request, TipoApoyo $tipo_apoyo)
    {
        $datos_apoyo = request()->except(['_token', '_method']);
        $tipo_apoyo-> update ($datos_apoyo);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoApoyo $tipo_apoyo)
    {
        $tipo_apoyo->delete();
        return redirect()->back();

    }
}
