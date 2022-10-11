<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $dificultades,
'descripcion' => 'dificultad',
'ruta_destroy'=>'dificultad.destroy',
'id'=>'id_dificultad',
'nombre'=>'Lista de Dificultades',
'ruta_store'=>'dificultad.store',
'ruta_edit'=>'dificultad.update'
])
<!--componente catalogo-->
