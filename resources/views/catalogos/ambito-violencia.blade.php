<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $ambitoViolencia,
'descripcion' => 'ambito',
'ruta_destroy'=>'ambito_violencia.destroy',
'id'=>'id_ambito_violencia',
'nombre'=>'ambito_violencia',
'ruta_store'=>'ambito_violencia.store',
'ruta_edit'=>'ambito_violencia.update'
])
<!--componente catalogo-->
