<!--Componente catalogo-->
@include('componentes.catalogos.datogeneral.index',
['datos' => $datos_generales,
'nombres' => 'nombres',
'ape_paterno' => 'ape_paterno',
'ape_materno' => 'ape_materno',
'situacion_conyugal' => 'situacion_conyugal',
'sexo' => 'sexo',
'id_situ_conyugal' => 'id_situ_conyugal',
'id_sexo' => 'id_sexo',
'fecha_nacimiento' => 'fecha_nacimiento',
'hijos' => 'hijos',
'telefono' => 'telefono',
'email' => 'email',
'grupo_etnico' => 'grupo_etnico',
'nacionalidad'=>'nacionalidad',
'id_nacionalidad' => 'id_nacionalidad',
'idioma'=>'idioma_espaniol',
'id_idioma' => 'id_idioma',
'domicilio'=>'calle',

'id_domicilio' => 'id_domicilio',
'id_registro_victima' => 'id_registro_victima',
'id'=>'id_datos_generales',

'nombre'=>'Datos Generales',
'id_municipio'=>'id_municipio',
'municipio'=>'municipio',
'calle'=>'calle',
'no_interior'=>'no_interior',
'no_exterior'=>'no_exterior',
'colonia'=>'colonia',
'cod_postal'=>'cod_postal',
'vive_con'=>'vive_con',
'curp'=>'curp',


'ruta_destroy'=>'datos_generales.destroy',
'ruta_store'=>'datos_generales.store',
'ruta_edit'=>'datos_generales.update'
],[

'datos_situacion_conyugal' => $datos_situacion_conyugal,
'datos_sexo' => $datos_sexo,
'datos_nacionalidad' => $datos_nacionalidad,
'datos_idioma' => $datos_idioma,
'idioma_espaniol'=>'idioma_espaniol',

'datos_municipios' => $datos_municipios,
'id_municipio'=>'id_municipio',
'municipio'=>'municipio',

'datos_domicilios'=>$datos_domicilios,

'datos_tipo_violencia'=>$datos_tipo_violencia,
'tipo_violencia'=>'tipo_violencia',
'id_tipo_violencia'=>'id_tipo_violencia',


'datos_modalidad_violencia'=>$datos_modalidad_violencia,
'id_modalidad_violencia'=>'id_modalidad_violencia',
'modalidad'=>'modalidad'


])
<!--End componente documento-->
