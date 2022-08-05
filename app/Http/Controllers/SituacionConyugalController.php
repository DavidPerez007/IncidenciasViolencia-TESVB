<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SituConyugal;

class SituacionConyugalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situconyugal = SituConyugal::all();

        return view('catalogos.situacion-conyugal',
        [
            'situconyugal'=> $situconyugal,

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
    public function store(Request $request, SituConyugal $situconyugal)
    {
        request()->validate(SituConyugal::$rules);
        $datos_situConyugal = request()->except(['_token', 'mode']);
        SituConyugal::insert($datos_situConyugal);
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
    public function update(Request $request, SituConyugal $situacion_conyugal)
    {

        request()->validate(SituConyugal::$rules);
        $datos_situconyugal = request()->except(['_token', '_method']);
        $situacion_conyugal-> update ($datos_situconyugal);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SituConyugal $situacion_conyugal)
    {
        //dd('nnn');
        $situacion_conyugal->delete();
        return redirect()->back();

    }
}
