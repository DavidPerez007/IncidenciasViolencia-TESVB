<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Efecto;

class EfectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efectos=Efecto::paginate(25);

        return view('catalogos.efectos',
        [
            'efectos' => $efectos

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
        request()->validate(Efecto::$rules);
        $datos_efecto = request()->except(['_token', 'mode']);
        Efecto::insert($datos_efecto);
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
    public function update(Request $request, Efecto $efecto)
    {

        request()->validate(Efecto::$rules);
        $datos_efectos = request()->except(['_token', '_method']);
        $efecto -> update ($datos_efectos);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Efecto $efecto)
    {
        $efecto->delete();
        return redirect()->back();
    }
}
