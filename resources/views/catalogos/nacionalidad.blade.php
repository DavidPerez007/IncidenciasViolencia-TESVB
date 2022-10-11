<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $nacionalidades,
'descripcion' => 'nacionalidad',
'ruta_destroy'=>'nacionalidad.destroy',
'id'=>'id_nacionalidad',
'nombre'=>'Lista de Nacionalidades',
'ruta_store'=>'nacionalidad.store',
'ruta_edit'=>'nacionalidad.update'
])
<!--componente catalogo-->
