<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $relaciones,
'descripcion' => 'tipo_relacion',
'ruta_destroy'=>'tipo_relacion.destroy',
'id'=>'id_tiporelacion',
'nombre'=>'tipo_relacion',
'ruta_store'=>'tipo_relacion.store',
'ruta_edit'=>'tipo_relacion.update'
])
<!--componente catalogo-->
