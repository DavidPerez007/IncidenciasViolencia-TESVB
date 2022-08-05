<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModalidadViolencia;

class ModalidadViolenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalidadViolencia = ModalidadViolencia::all();
        return view ('catalogos.modalidad-violencia',[

            'modalidadViolencia'=> $modalidadViolencia,

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
        request()->validate(ModalidadViolencia::$rules);
        $datos_modalidadViolencia = request()->except(['_token', 'mode']);
       ModalidadViolencia::insert($datos_modalidadViolencia);
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
    public function update(Request $request, ModalidadViolencia $modalidad_violencium)
    {
        request()->validate(ModalidadViolencia::$rules);

        $datos_modalidadViolencia = request()->except(['_token', '_method']);
        $modalidad_violencium-> update ($datos_modalidadViolencia);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModalidadViolencia $modalidad_violencium)
    {
        $modalidad_violencium->delete();
        return redirect()->back();
    }
}
