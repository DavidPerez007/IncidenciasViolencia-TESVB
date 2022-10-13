<?php

namespace App\Http\Controllers;

use App\Models\DatoGeneral;
use App\Models\Domicilio;
use App\Models\Idioma;
use App\Models\Municipio;
use App\Models\Nacionalidad;
use App\Models\Sexo;
use App\Models\SituConyugal;
use Database\Seeders\Situacion_ConyugalSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatoGeneralController extends Controller
{
    public function index()
    {
        /**
        SELECT
            datos_generales.nombres,datos_generales.ape_paterno,datos_generales.ape_materno,datos_generales.fecha_nacimiento,datos_generales.hijos,datos_generales.telefono,datos_generales.email,
            datos_generales.grupo_etnico,
            sexo.sexo,situ_conyugal.situacion_conyugal,nacionalidad.nacionalidad,idioma.idioma_espaniol,domicilio.calle
        FROM
            datos_generales,sexo,situ_conyugal,nacionalidad,idioma,domicilio
        WHERE
         *     datos_generales.id_situ_conyugal=situ_conyugal.id_situ_conyugal
         * and datos_generales.id_sexo=sexo.id_sexo
         * and datos_generales.id_nacionalidad=nacionalidad.id_nacionalidad
         * and datos_generales.id_idioma=idioma.id_idioma
         * and datos_generales.id_domicilio=domicilio.id_domicilio;
        **/

        $datos_generales=DB::table( 'datos_generales')
            ->join('nacionalidad', 'datos_generales.id_nacionalidad', '=','nacionalidad.id_nacionalidad')
            ->join('situ_conyugal','datos_generales.id_situ_conyugal','=','situ_conyugal.id_situ_conyugal')
            ->join('sexo',         'datos_generales.id_sexo',         '=','sexo.id_sexo')
            ->join('idioma',       'datos_generales.id_idioma',       '=','idioma.id_idioma')
            ->join('domicilio',    'datos_generales.id_domicilio',    '=','domicilio.id_domicilio')
            ->select(
                'datos_generales.id_datos_generales',
                'datos_generales.nombres',
                'datos_generales.ape_paterno',
                'datos_generales.ape_materno',
                'datos_generales.fecha_nacimiento',
                'datos_generales.hijos',
                'datos_generales.telefono',
                'datos_generales.email',
                'datos_generales.grupo_etnico',
                'datos_generales.id_sexo',
                'datos_generales.id_idioma',
                'datos_generales.id_nacionalidad',
                'datos_generales.id_situ_conyugal',
                'datos_generales.id_domicilio',
                'sexo.sexo',
                'situ_conyugal.situacion_conyugal',
                'nacionalidad.nacionalidad',
                'idioma.idioma_espaniol',
                'domicilio.*')->get();

       $datos_sit_con=SituConyugal::all();
        $datos_sexo=Sexo::all();
        $datos_nacionalidad=Nacionalidad::all();
        $datos_idioma=Idioma::all();
        $datos_domicilio=Domicilio::all();
        $datos_municipios=Municipio::all();
       // dd($datos_generales);


        return view('catalogos.datogeneral',
            [
                'datos_generales' => $datos_generales,
                'datos_situacion_conyugal' => $datos_sit_con,
                'datos_sexo' => $datos_sexo,
                'datos_nacionalidad' => $datos_nacionalidad,
                'datos_idioma' => $datos_idioma,
                'datos_domicilio' => $datos_domicilio,
                'datos_municipios' => $datos_municipios
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       // dd($request);
        DB::table('domicilio')
            ->insert(['calle'=>$request->calle,'no_interior'=>$request->no_interior,
                'no_exterior'=>$request->no_exterior,'colonia'=>$request->colonia,'cod_postal'=>$request->cod_postal
                ,'id_municipio'=>$request->id_municipio]);

        $datos_domicilio = DB::table('domicilio')
            ->where( 'calle', '=', $request->calle)
            ->where( 'no_interior', '=', $request->no_interior)
            ->where('no_exterior', '=', $request->no_exterior)
            ->where('colonia', '=', $request->colonia)
            ->where('cod_postal', '=', $request->cod_postal)
            ->where('id_municipio', '=', $request->id_municipio)
            ->select('id_domicilio')->get();

        DB::table('datos_generales')
            ->insert(['nombres'=>$request->nombres,'ape_paterno'=>$request->ape_paterno,'ape_materno'=>$request->ape_materno,
                'id_situ_conyugal'=>$request->id_situ_conyugal,'id_sexo'=>$request->id_sexo,'fecha_nacimiento'=>$request->fecha_nacimiento,
                'hijos'=>$request->hijos,'telefono'=>$request->telefono,'email'=>$request->email,'grupo_etnico'=>$request->grupo_etnico,
                'id_nacionalidad'=>$request->id_nacionalidad,'id_idioma'=>$request->id_idioma,'id_domicilio'=>$datos_domicilio[0]->id_domicilio]);

        return redirect()->back();
    }

    public function update(Request $request)
    {
        //dd($request);
        DB::table('datos_generales')
            ->where('datos_generales.id_datos_generales','=',$request->dato_id)
            ->UPDATE([
                'nombres'=>$request->nombres,
                'ape_paterno'=>$request->ape_paterno,
                'ape_materno'=>$request->ape_materno,
                'id_situ_conyugal'=>$request->id_situ_conyugal,
                'id_sexo'=>$request->id_sexo,
                'fecha_nacimiento'=>$request->fecha_nacimiento,
                'hijos'=>$request->hijos,
                'telefono'=>$request->telefono,
                'email'=>$request->email,
                'grupo_etnico'=>$request->grupo_etnico,
                'id_nacionalidad'=>$request->id_nacionalidad,
                'id_idioma'=>$request->id_idioma,
                'id_domicilio'=>$request->id_domicilio])
        ;

        DB::table('domicilio')
            ->where('domicilio.id_domicilio','=',$request->id_domicilio)
            ->update([
                'calle'=> $request->calle,
                'colonia'=> $request->colonia,
                'no_interior'=> $request->no_interior,
                'no_exterior'=> $request->no_exterior,
                'cod_postal'=> $request->cod_postal,
                'id_municipio'=> $request->id_municipio,]);

        return redirect()->back();
    }


    public function destroy($id)
    {
        DB::table('datos_generales')
            ->where('datos_generales.id_datos_generales','=',$id)
            ->delete();

        return redirect()->back();
    }

    public function show(DatoGeneral $datosGenerales)
    {
        //
    }
    public function edit(DatoGeneral $datosGenerales)
    {
        //
    }

}
