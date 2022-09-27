<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domicilios = Domicilio::paginate(25);
        //dd($domicilios);
        return view('catalogos.domicilio',
            [
                'domicilios' => $domicilios
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

        request()->validate(Domicilio::$rules);

        $datos_domicilio = request()->except(['_token', 'mode']);
        Domicilio::insert($datos_domicilio);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilio $domicilio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domicilio $domicilio)
    {
        request()->validate(Domicilio::$rules);

        $datos_domicilio = request()->except(['_token', '_method']);
        $domicilio-> update ($datos_domicilio);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();
        return redirect()->back();
    }
}
