<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $situconyugal,
'descripcion' => 'situacion_conyugal',
'ruta_destroy'=>'situacion_conyugal.destroy',
'id'=>'id_situ_conyugal',
'nombre'=>'Situacion Conyugal',
'ruta_store'=>'situacion_conyugal.store',
'ruta_edit'=>'situacion_conyugal.update'
])
<!--componente catalogo-->
