
<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $efectos,
'descripcion' => 'efectos',
'ruta_destroy'=>'efectos.destroy',
'id'=>'id_efectos',
'nombre'=>'Lista de Efectos',
'ruta_store'=>'efectos.store',
'ruta_edit'=>'efectos.update'
])
<!--componente catalogo-->
