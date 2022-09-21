

<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $estados,
'descripcion' => 'estado',
'ruta_destroy'=>'estado.destroy',
'id'=>'id_estado',
'nombre'=>'Estado',
'ruta_store'=>'estado.store',
'ruta_edit'=>'estado.update'
])
<!--End componente documento-->
