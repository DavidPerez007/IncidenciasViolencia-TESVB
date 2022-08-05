<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $tipo_violencia,
'descripcion' => 'tipo_violencia',
'ruta_destroy'=>'tipo_violencia.destroy',
'id'=>'id_tipo_violencia',
'nombre'=>'tipo_violencia',
'ruta_store'=>'tipo_violencia.store',
'ruta_edit'=>'tipo_violencia.update'
])
<!--componente catalogo-->
