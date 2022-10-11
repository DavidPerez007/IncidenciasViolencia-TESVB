<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $modalidadViolencia,
'descripcion' => 'modalidad',
'ruta_destroy'=>'modalidad_violencia.destroy',
'id'=>'id_modalidad_violencia',
'nombre'=>'Modalidades de Violencia',
'ruta_store'=>'modalidad_violencia.store',
'ruta_edit'=>'modalidad_violencia.update'
])
<!--componente catalogo-->
