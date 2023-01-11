<?php

namespace App\Http\Controllers;

use App\Models\DatoGeneral;
use App\Models\Domicilio;
use App\Models\Municipio;
use App\Models\RegistroVictima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroVictimaController extends Controller
{
    public function index()
    {
        //SELECT
        //datos_generales.nombres,
        //datos_generales.ape_paterno,
        //datos_generales.ape_materno,
        //municipio.municipio,
        //domicilio.calle,
        //domicilio.colonia,
        //registro_victima.vive_con,
        //registro_victima.curp
        // FROM
        // registro_victima,datos_generales,municipio,domicilio
        // WHERE
        // registro_victima.id_datos_generales=datos_generales.id_datos_generales
        // and registro_victima.id_municipio=municipio.id_municipio
        // and registro_victima.id_domicilio=domicilio.id_domicilio;

        $datos_victimas = DB::table('registro_victima')
            ->join('datos_generales', 'registro_victima.id_datos_generales', '=', 'datos_generales.id_datos_generales')
            ->join('municipio', 'registro_victima.id_municipio', '=', 'municipio.id_municipio')
            ->join('domicilio', 'registro_victima.id_domicilio', '=', 'domicilio.id_domicilio')
            ->select('datos_generales.id_datos_generales', 'municipio.id_municipio', 'domicilio.id_domicilio',
                'datos_generales.nombres',
                'datos_generales.ape_paterno',
                'datos_generales.ape_materno',
                'municipio.municipio',
                'domicilio.calle',
                'domicilio.colonia',
                'registro_victima.*')->get();
     //   dd($datos_victimas);
        $datos_municipios=Municipio::all();
        $datos_domicilios=Domicilio::all();
        $datos_generales=DatoGeneral::all();
       // dd($datos_generales);


        return view('catalogos.datovictima',
            [
                'datos_victimas' => $datos_victimas,
                'datos_municipios'=>$datos_municipios,
                'datos_domicilios'=>$datos_domicilios,
                'datos_generales'=>$datos_generales
            ]);
      //  return view('vistas.registro__victima');
    }
    public function create (){

    }
    public function update(Request $request, RegistroVictima $datovictima)
    {

        //dd($request);
        request()->validate(RegistroVictima::$rules);
        //dd('');
        DB::table('registro_victima')
            ->where('registro_victima.id_registro_victima','=',$request->dato_id)
            ->UPDATE(['id_datos_generales'=>$request->id_datos_generales,'vive_con'=>$request->vive_con,
                'curp'=>$request->curp,'id_municipio'=>$request->id_municipio,'id_domicilio'=>$request->id_domicilio])
        ;
        return redirect()->back();
    }
    public function store(Request $request)
    {
        //($request);
        request()->validate(RegistroVictima::$rules);
        DB::table('registro_victima')->
        insert(['id_datos_generales'=>$request->id_datos_generales,'vive_con'=>$request->vive_con,
            'id_municipio'=>$request->id_municipio,'curp'=>$request->curp,'id_domicilio'=>$request->id_domicilio]);
        return redirect()->back();
    }
    public function destroy($id)
    {
        DB::table('registro_victima')
            ->where('registro_victima.id_registro_victima','=',$id)
            ->delete();
        return redirect()->back();
    }
}
