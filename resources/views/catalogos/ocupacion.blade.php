<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $ocupaciones,
'descripcion' => 'actividad_realiza',
'ruta_destroy'=>'ocupacion.destroy',
'id'=>'id_actividad_realiza',
'nombre'=>'actividad_realiza',
'ruta_store'=>'ocupacion.store',
'ruta_edit'=>'ocupacion.update'
])
<!--componente catalogo-->
