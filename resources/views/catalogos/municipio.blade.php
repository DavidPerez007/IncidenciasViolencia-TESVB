

<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $municipios,
'descripcion' => 'municipio',
'ruta_destroy'=>'municipio.destroy',
'id'=>'id_municipio',
'nombre'=>'Lista de Municipios',
'ruta_store'=>'municipio.store',
'ruta_edit'=>'municipio.update'
])
<!--End componente documento-->
