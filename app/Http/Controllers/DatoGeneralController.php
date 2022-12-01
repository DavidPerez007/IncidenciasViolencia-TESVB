<?php

namespace App\Http\Controllers;

use App\Http\Livewire\TipoApoyos;
use App\Models\DatoGeneral;
use App\Models\Domicilio;
use App\Models\Estado;
use App\Models\Idioma;
use App\Models\ModalidadViolencia;
use App\Models\Municipio;
use App\Models\Nacionalidad;
use App\Models\RegistroVictima;
use App\Models\Sexo;
use App\Models\SituConyugal;
use App\Models\TipoApoyo;
use App\Models\TipoRelacion;
use App\Models\TipoViolencia;
use App\Models\RutasVictima;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatoGeneralController extends Controller
{
    public function byProject($id){
        return [
            DB::table('domicilio')->where('id_domicilio', $id)
                ->join('municipio', 'domicilio.id_municipio', '=', 'municipio.id_municipio')
                ->join('estado','municipio.id_estado','=','estado.id_estado')
                ->select(
                    'municipio.municipio',
                    'domicilio.*','estado.*')->get(),
            Municipio::all(),
            Estado::all(),
        ];
    }
    public function estado($id){
        return [
            DB::table('municipio')->where('id_estado', $id)
                ->select(
                    'municipio.id_municipio',
                    'municipio.municipio',
                    'municipio.id_estado'
                )->get()
        ];

    }
    public function idioma(Request $request){
        return [
            DB::table('idioma')->where('idioma_espaniol', '=','Español')
                ->select(
                    'idioma.*')->get(),
            Idioma::all(),
        ];
    }

    public function rutas($id){

      return [
         DB::table('rutas_victimas')->where('rutas_victimas.id_datos_generales',$id)
             ->join('datos_generales','rutas_victimas.id_datos_generales','=','datos_generales.id_datos_generales')
             ->select('datos_generales.*','rutas_victimas.*')->get(),
          ];

    }

    public function index()
    {

        $datos_generales=DB::table( 'registro_victima')
            ->join('datos_generales','registro_victima.id_datos_generales', '=','datos_generales.id_datos_generales')
            ->join('municipio',    'registro_victima.id_municipio',   '=','municipio.id_municipio')
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
                'datos_generales.nic',
                'datos_generales.nuc',
                'sexo.sexo',
                'situ_conyugal.situacion_conyugal',
                'nacionalidad.nacionalidad',
                'idioma.idioma_espaniol',
                'domicilio.*',
                'registro_victima.*',
                'municipio.municipio'
            )->get();
        $datos_sit_con=SituConyugal::all();
        $datos_sexo=Sexo::all();
        $datos_nacionalidad=Nacionalidad::all();
        $datos_idioma=Idioma::all();
        $datos_domicilio=Domicilio::all();
        $datos_estados=Estado::all();
        $datos_municipios=Municipio::all();
        $datos_registro_victima=RegistroVictima::all();
        $datos_tipo_violencia=TipoViolencia::all(['id_tipo_violencia','tipo_violencia']);
        $datos_modalidad_violencia=ModalidadViolencia::all(['id_modalidad_violencia','modalidad']);
        $datos_tipo_apoyo=TipoApoyo::all(['id_tipo_apoyo','tipo_apoyo']);
        $datos_tipo_relacion=TipoRelacion::all(['id_tiporelacion','tipo_relacion']);
        $datos_rutas=RutasVictima::all();
    ///dd($datos_rutas);

        return view('catalogos.datogeneral',
            [
                'datos_generales' => $datos_generales,
                'datos_situacion_conyugal' => $datos_sit_con,
                'datos_sexo' => $datos_sexo,
                'datos_nacionalidad' => $datos_nacionalidad,
                'datos_idioma' => $datos_idioma,
                'datos_domicilios' => $datos_domicilio,
                'datos_municipios' => $datos_municipios,
                'datos_registro_victima'=>$datos_registro_victima,
                'datos_tipo_violencia'=>$datos_tipo_violencia,
                'datos_modalidad_violencia'=>$datos_modalidad_violencia,
                'datos_tipo_apoyo'=>$datos_tipo_apoyo,
                'datos_tipo_relacion'=>$datos_tipo_relacion,
                'datos_rutas'=>$datos_rutas,
                'datos_estados'=>$datos_estados
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $tipos_violecia=$request->id_tipo_violencia;
        foreach ($tipos_violecia as $tipo_violencia )
        {
            echo($tipo_violencia);
            DB::table('clas_violencia')->
            insert([
                'id_tipo_violencia'=>$tipo_violencia,
                'id_modalidad_violencia'=>$request->id_modalidad_violencia]);

        }
      // dd($request);;

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
                    'id_nacionalidad'=>$request->id_nacionalidad,'id_idioma'=>$request->id_idioma,'id_domicilio'=>$domicilio->id_domicilio,
                    'nic'=>$request->nic,'nuc'=>$request->nuc
                    ]);

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
                    'id_municipio'=> $request->id_municipio,
                    ]);

            //insertar en datos generales
            DB::table('datos_generales')
                ->insert(['nombres'=>$request->nombres,'ape_paterno'=>$request->ape_paterno,'ape_materno'=>$request->ape_materno,
                    'id_situ_conyugal'=>$request->id_situ_conyugal,'id_sexo'=>$request->id_sexo,'fecha_nacimiento'=>$request->fecha_nacimiento,
                    'hijos'=>$request->hijos,'telefono'=>$request->telefono,'email'=>$request->email,'grupo_etnico'=>$request->grupo_etnico,
                    'id_nacionalidad'=>$request->id_nacionalidad,'id_idioma'=>$request->id_idioma,'id_domicilio'=>$request->id_domicilio,
                    'nic'=>$request->nic,'nuc'=>$request->nuc]);

        }

        //obtener id del ultimo registro en datos generales
        $datos_generales = DatoGeneral::find(1)->orderBy('id_datos_generales', 'desc')->first();

        DB::table('rutas_victimas')->insert(['dependencia'=>'Registro','id_datos_generales'=>$datos_generales->id_datos_generales,]);
        DB::table('rutas_victimas')->insert(['dependencia'=>$request->dependencia,'id_datos_generales'=>$datos_generales->id_datos_generales,]);

        $domicilio = Domicilio::find(1)->orderBy('id_domicilio', 'desc')->first();

        //insertar en Registro Victima
        DB::table('registro_victima')->
        insert(['id_datos_generales'=>$datos_generales->id_datos_generales,'vive_con'=>$request->vive_con,
            'id_municipio'=>$request->id_municipio,'curp'=>$request->curp,'id_domicilio'=>$domicilio->id_domicilio]);

        return redirect()->back();
    }

    public function update(Request $request)
    {

        //dd($request);;

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

        DB::table('registro_victima')
            ->where('registro_victima.id_registro_victima','=',$request->id_registro_victima)
            ->update(['id_datos_generales'=>$request->dato_id,
                'vive_con'=>$request->vive_con,
                'id_municipio'=>$request->id_municipio,
                'curp'=>$request->curp,
                'id_domicilio'=>$request->id_domicilio])
        ;


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
