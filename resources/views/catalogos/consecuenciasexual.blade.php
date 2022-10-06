<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $datos_consecuencias,
'descripcion' => 'con_sexual',
'ruta_destroy'=>'con_sexual.destroy',
'id'=>'id_con_sexuales',
'nombre'=>'Consecuancias Sexuales',
'ruta_store'=>'con_sexual.store',
'ruta_edit'=>'con_sexual.update'
])
<!--componente catalogo-->
