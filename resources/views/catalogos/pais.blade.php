

<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $paises,
'descripcion' => 'pais',
'ruta_destroy'=>'pais.destroy',
'id'=>'id_pais',
'nombre'=>'Pais',
'ruta_store'=>'pais.store',
'ruta_edit'=>'pais.update'
])
<!--End componente documento-->
