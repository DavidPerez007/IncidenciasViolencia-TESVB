<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dificultad;

class DificultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dificultades = Dificultad::paginate(25);
        return view('catalogos.dificultad',[
            'dificultades'=> $dificultades,
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
        request()->validate(Dificultad::$rules);
        $datos_dificultad = request()->except(['_token', 'mode']);
       Dificultad::insert($datos_dificultad);
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
    public function update(Request $request, Dificultad $dificultad)
    {
        $datos_dificultad = request()->except(['_token', '_method']);
        $dificultad-> update ($datos_dificultad);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dificultad $dificultad)
    {
        $dificultad->delete();
        return redirect()->back();

    }
}
