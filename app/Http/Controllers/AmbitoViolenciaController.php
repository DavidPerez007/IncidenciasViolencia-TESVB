<?php

namespace App\Http\Controllers;

use App\Models\AmbitoViolencia;
use Illuminate\Http\Request;

class AmbitoViolenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambitoViolencia = AmbitoViolencia::paginate(25);

        return view('catalogos.ambito-violencia',[
            'ambitoViolencia'=> $ambitoViolencia,
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
        request()->validate(AmbitoViolencia::$rules);
        $datos_ambitoViolencia = request()->except(['_token', 'mode']);
       AmbitoViolencia::insert($datos_ambitoViolencia);
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
    public function update(Request $request, AmbitoViolencia $ambito_violencium)
    {
        request()->validate(AmbitoViolencia::$rules);

        $datos_ambitoViolencia = request()->except(['_token', '_method']);
        $ambito_violencium-> update ($datos_ambitoViolencia);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbitoViolencia $ambito_violencium)
    {
        $ambito_violencium->delete();
        return redirect()->back();
    }
}
