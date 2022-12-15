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


        foreach ($datos_municipios as $dato_municipio) {
           $id=$dato_municipio->id_municipio;

            $datos_count = DB::table('domicilio')

                ->join('datos_generales', 'domicilio.id_domicilio', '=', 'datos_generales.id_domicilio')
                ->where('domicilio.id_municipio', '=', $id)->count()
                ;

            $dato_municipio->count_row=$datos_count;
        }

       $max= $datos_municipios->max('count_row');
        $min= $datos_municipios->min('count_row');
        $median= $datos_municipios->median('count_row');

        /** $max= 500;
        $min=30;
        $median= 100;**/

        $rango_minimo=((($median-$min)*60)/100);
        $rango_maximo=((($max-$median)*70)/100);


       //dd('minimo: ',$min,'rango_minimo: ',$rango_minimo,' median:',$median,' max:', $max,' rango_max:', $rango_maximo);


        //SELECT COUNT(*) FROM `datos_generales`, municipio, domicilio
        // WHERE datos_generales.id_domicilio = domicilio.id_domicilio and domicilio.id_municipio=727 and domicilio.id_municipio=municipio.id_municipio;
        ///dd('holaaaaaaasasas');
        ///
        ///
        return view('catalogos.dashboard',
            [
                'datos_municipios' => $datos_municipios,
                'max'=>$max,
                'min'=>$min,
                'rango_minimo'=>$rango_minimo,
                'rango_maximo'=>$rango_maximo
                ]);
    }
}
