<?php

namespace App\Http\Controllers;

use App\Models\ClasificacionViolencia;
use App\Models\ModalidadViolencia;
use App\Models\TipoViolencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasificacionViolenciaController extends Controller
{
    public function index()
    {
        $datos_calsificacion=DB::table('clas_violencia')
            ->join('tipo_violencia','clas_violencia.id_tipo_violencia','=','tipo_violencia.id_tipo_violencia')
            ->join('modalidad_violencia','clas_violencia.id_modalidad_violencia','=','modalidad_violencia.id_modalidad_violencia')
            ->select('clas_violencia.id_clas_violencia','tipo_violencia.tipo_violencia','tipo_violencia.id_tipo_violencia','modalidad_violencia.modalidad','modalidad_violencia.id_modalidad_violencia')->get();

        $tipos_violencia=TipoViolencia::all();
        $modalidades_violencia=ModalidadViolencia::all();

        return view ('catalogos.clasificacionviolencia',[

            'datos_clasificacion'=> $datos_calsificacion,
            'tipos_violencia'=>$tipos_violencia,
            'modalidades_violencia'=>$modalidades_violencia
        ]);

        //SELECT clas_violencia.id_clas_violencia,tipo_violencia.tipo_violencia,modalidad_violencia.modalidad
        // FROM clas_violencia,tipo_violencia,modalidad_violencia
        // WHERE clas_violencia.id_tipo_violencia=tipo_violencia.id_tipo_violencia
        // and clas_violencia.id_modalidad_violencia=modalidad_violencia.id_modalidad_violencia;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ClasificacionViolencia::$rules);
        DB::table('clas_violencia')->
        insert(['id_tipo_violencia'=>$request->id_tipo_violencia,'id_modalidad_violencia'=>$request->id_modalidad_violencia]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        request()->validate(ClasificacionViolencia::$rules);
        DB::table('clas_violencia')
            ->where('clas_violencia.id_clas_violencia','=',$request->dato_id)
            ->UPDATE(['id_tipo_violencia'=>$request->id_tipo_violencia,'id_modalidad_violencia'=>$request->id_modalidad_violencia])
            ;
        return redirect()->back();

    }

    public function destroy($id)
    {
        DB::table('clas_violencia')
            ->where('clas_violencia.id_clas_violencia','=',$id)
            ->delete();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClasificacionViolencia  $clasificacionViolencia
     * @return \Illuminate\Http\Response
     */
    public function show(ClasificacionViolencia $clasificacionViolencia)
    {
        //
    }
    public function edit(ClasificacionViolencia $clasificacionViolencia, $id)
    {

    }

}
