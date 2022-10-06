<!--Componente catalogo-->
@include('componentes.catalogos.datovictima.index',
['datos' => $datos_victimas,
'vive_con' => 'vive_con',
'id_datos_generales' => 'id_datos_generales',
'id_municipio' => 'id_municipio',
'curp' => 'curp',
'id_domicilio' => 'id_domicilio',
'id'=>'	id_registro_victima',
'nombre'=>'Victima',

'ruta_destroy'=>'registro_victima.destroy',
'ruta_store'=>'registro_victima.store',
'ruta_edit'=>'registro_victima.update'
])
<!--End componente documento-->
