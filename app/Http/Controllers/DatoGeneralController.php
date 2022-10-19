<?php

namespace App\Http\Controllers;

use App\Models\DatoGeneral;
use App\Models\Domicilio;
use App\Models\Idioma;
use App\Models\Municipio;
use App\Models\Nacionalidad;
use App\Models\Sexo;
use App\Models\SituConyugal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatoGeneralController extends Controller
{
    public function byProject($id){


        return [
            DB::table('domicilio')->where('id_domicilio', $id)
                ->join('municipio', 'domicilio.id_municipio', '=', 'municipio.id_municipio')
                ->select(
                    'municipio.municipio',
                    'domicilio.*')->get(),
            Municipio::all(),
        ];
        // return Domicilio::where('id_domicilio',$id)->get();
    }
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
   // dd('id=3');
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
                'datos_domicilios' => $datos_domicilio,
                'datos_municipios' => $datos_municipios
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        ///si se va agregar un nuevo domicilio
        if ($request->id_domicilio==null) {

            //insertar domicilio
            DB::table('domicilio')
                ->insert(['calle' => $request->calle, 'no_interior' => $request->no_interior,
                    'no_exterior' => $request->no_exterior, 'colonia' => $request->colonia, 'cod_postal' => $request->cod_postal
                    , 'id_municipio' => $request->id_municipio]);

            //obtener id del ultimo registro
            $domicilio = Domicilio::find(1)->orderBy('id_domicilio', 'desc')->first();

            //insertar en datos generales
            DB::table('datos_generales')
                ->insert(['nombres'=>$request->nombres,'ape_paterno'=>$request->ape_paterno,'ape_materno'=>$request->ape_materno,
                    'id_situ_conyugal'=>$request->id_situ_conyugal,'id_sexo'=>$request->id_sexo,'fecha_nacimiento'=>$request->fecha_nacimiento,
                    'hijos'=>$request->hijos,'telefono'=>$request->telefono,'email'=>$request->email,'grupo_etnico'=>$request->grupo_etnico,
                    'id_nacionalidad'=>$request->id_nacionalidad,'id_idioma'=>$request->id_idioma,'id_domicilio'=>$domicilio->id_domicilio]);

        }
        ////EDITAR UN DOMICILIO YA EXISTENTE
        else
        {
            //modificar tabla domicilios.
            DB::table('domicilio')
                ->where('domicilio.id_domicilio','=',$request->id_domicilio)
                ->update([
                    'calle'=> $request->calle,
                    'colonia'=> $request->colonia,
                    'no_interior'=> $request->no_interior,
                    'no_exterior'=> $request->no_exterior,
                    'cod_postal'=> $request->cod_postal,
                    'id_municipio'=> $request->id_municipio,]);

            //insertar en datos generales
            DB::table('datos_generales')
                ->insert(['nombres'=>$request->nombres,'ape_paterno'=>$request->ape_paterno,'ape_materno'=>$request->ape_materno,
                    'id_situ_conyugal'=>$request->id_situ_conyugal,'id_sexo'=>$request->id_sexo,'fecha_nacimiento'=>$request->fecha_nacimiento,
                    'hijos'=>$request->hijos,'telefono'=>$request->telefono,'email'=>$request->email,'grupo_etnico'=>$request->grupo_etnico,
                    'id_nacionalidad'=>$request->id_nacionalidad,'id_idioma'=>$request->id_idioma,'id_domicilio'=>$request->id_domicilio]);

        }

        //obtener id del ultimo registro en datos generales
        $datos_generales = DatoGeneral::find(1)->orderBy('id_datos_generales', 'desc')->first();

        //insertar en Registro Victima
        DB::table('registro_victima')->
        insert(['id_datos_generales'=>$datos_generales->id_datos_generales,'vive_con'=>$request->vive_con,
            'id_municipio'=>$request->id_municipio,'curp'=>$request->curp,'id_domicilio'=>$domicilio->id_domicilio]);

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
