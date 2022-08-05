<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $apoyos,
'descripcion' => 'tipo_apoyo',
'ruta_destroy'=>'tipo_apoyo.destroy',
'id'=>'id_tipo_apoyo',
'nombre'=>'tipo_apoyo',
'ruta_store'=>'tipo_apoyo.store',
'ruta_edit'=>'tipo_apoyo.update'
])
<!--componente catalogo-->
