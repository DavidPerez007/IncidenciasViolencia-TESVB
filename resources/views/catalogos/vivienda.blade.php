
<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $viviendas,
'descripcion' => 'vivienda',
'ruta_destroy'=>'vivienda.destroy',
'id'=>'id_vivienda',
'nombre'=>'vivienda',
'ruta_store'=>'vivienda.store',
'ruta_edit'=>'vivienda.update'
])
<!--componente catalogo-->




