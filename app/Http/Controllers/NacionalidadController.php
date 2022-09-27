<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use Illuminate\Http\Request;

class NacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacionalidades=Nacionalidad::paginate(25);
       // dd( $nacionalidades);
        return view ('catalogos.nacionalidad',[

            'nacionalidades'=> $nacionalidades,

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

        request()->validate(Nacionalidad::$rules);
        $datos_nacionalidad = request()->except(['_token', 'mode']);
        Nacionalidad::insert($datos_nacionalidad);
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
    public function update(Request $request, Nacionalidad $nacionalidad)
    {
        request()->validate(Nacionalidad::$rules);

        $datos_nacionalidad = request()->except(['_token', '_method']);
        $nacionalidad-> update ($datos_nacionalidad);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidad $nacionalidad)
    {
        $nacionalidad->delete();
        return redirect()->back();
    }
}
