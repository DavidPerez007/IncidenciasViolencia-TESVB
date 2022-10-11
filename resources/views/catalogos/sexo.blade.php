
<!--Componente catalog-->

@include('componentes.catalogos.index',
['datos' => $sexos,
'descripcion' => 'sexo',
'ruta_destroy'=>'sexo.destroy',
'id'=>'id_sexo',
'nombre'=>'Lista Sexo',
'ruta_store'=>'sexo.store',
'ruta_edit'=>'sexo.update'
])
<!--End componente catalogo-->
