<!--Componente catalogo-->
@include('componentes.catalogos.datovictima.index',
['datos' => $datos_victimas,
'vive_con' => 'vive_con',
'nombres'=>'nombres',
'municipio'=>'municipio',
'ape_paterno'=>'ape_paterno',
'ape_materno'=>'ape_materno',
'id_datos_generales' => 'id_datos_generales',
'id_municipio' => 'id_municipio',
'curp' => 'curp',
'id_domicilio' => 'id_domicilio',
'id'=>'	id_registro_victima',
'nombre'=>'Victima',

'ruta_destroy'=>'registro_victima.destroy',
'ruta_store'=>'registro_victima.store',
'ruta_edit'=>'registro_victima.update'
],
[
    'datos_municipios'=>$datos_municipios,
     'datos_domicilios'=>$datos_domicilios,
     'calle'=>'calle',
     'colonia'=>'colonia',
     'datos_generales'=>$datos_generales
])
<!--End componente documento-->
