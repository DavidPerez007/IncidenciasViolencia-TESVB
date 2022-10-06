<?php

namespace App\Http\Controllers;

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

        $datos_calsificacion=DB::table('registro_victima')
            ->join('datos_generales','registro_victima.id_datos_generales','=','datos_generales.id_datos_generales')
            ->join('municipio',      'registro_victima.id_municipio',      '=','municipio.id_municipio')
            ->join('domicilio',      'registro_victima.id_domicilio',      '=','domicilio.id_domicilio')
            ->select('clas_violencia.id_clas_violencia','tipo_violencia.tipo_violencia',
                'datos_generales.nombres',
                'datos_generales.ape_paterno',               'datos_generales.ape_materno',
                'municipio.municipio',
                'domicilio.calle',
                'domicilio.colonia',
                'registro_victima.vive_con',
                'registro_victima.curp')->get();


        $datos_victimas = RegistroVictima::paginate(15);
        return view('catalogos.datovictima',
            [
                'datos_victimas' => $datos_victimas
            ]);
      //  return view('vistas.registro__victima');
    }
    public function create (){
        //return view ('vistas.registro_caso_victima');
    }
    public function update(Request $request, RegistroVictima $datovictima)
    {
        request()->validate(RegistroVictima::$rules);
        $datos_victmas = request()->except(['_token', '_method']);
        $datovictima-> update ($datos_victmas);

        return redirect()->back();
    }
}
