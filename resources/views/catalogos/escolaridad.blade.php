<!--Componente catalog-->

@include('componentes.catalogos.index',
['datos' => $escolaridades,
'descripcion' => 'escolaridad',
'ruta_destroy'=>'escolaridad.destroy',
'id'=>'id_escolaridad',
'nombre'=>'Escolaridad',
'ruta_store'=>'escolaridad.store',
'ruta_edit'=>'escolaridad.update'
])
<!--End componente catalogo-->
