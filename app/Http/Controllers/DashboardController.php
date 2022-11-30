<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $datos_municipios= DB::table('municipio')
            ->select('municipio.id_municipio','municipio.municipio','estado.id_estado','estado.estado')
        ->join('estado','estado.id_estado','=','municipio.id_estado')->get();

    //    $datos_generales=DB::table( 'datos_generales')->count();

//dd($datos_municipios);
     foreach ($datos_municipios as $dato_municipio) {
        $id=$dato_municipio->id_municipio;

         $datos_count = DB::table('domicilio')

             ->join('datos_generales', 'domicilio.id_domicilio', '=', 'datos_generales.id_domicilio')
             ->where('domicilio.id_municipio', '=', $id)->count()
             ;

         $dato_municipio->count_row=$datos_count;
     }

        //dd($datos_municipios[726]->add_whatever_element_you_want[0]->count_row);
//dd($datos_municipios[726]);


        //SELECT COUNT(*) FROM `datos_generales`, municipio, domicilio
        // WHERE datos_generales.id_domicilio = domicilio.id_domicilio and domicilio.id_municipio=727 and domicilio.id_municipio=municipio.id_municipio;
        ///dd('holaaaaaaasasas');
        ///
        ///
        return view('catalogos.dashboard',
            [
                'datos_municipios' => $datos_municipios]);
    }
}
