<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $nacionalidades,
'descripcion' => 'nacionalida',
'ruta_destroy'=>'nacionalidad.destroy',
'id'=>'id_nacionalidad',
'nombre'=>'nacionalidad',
'ruta_store'=>'nacionalidad.store',
'ruta_edit'=>'nacionalidad.update'
])
<!--componente catalogo-->
