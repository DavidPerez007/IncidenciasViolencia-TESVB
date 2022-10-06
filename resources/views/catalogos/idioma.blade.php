

<!--Componente catalogo-->
@include('componentes.catalogos.index',
['datos' => $idiomas,
'descripcion' => 'idioma_espaniol',
'ruta_destroy'=>'idioma.destroy',
'id'=>'id_idioma',
'nombre'=>'idioma_espaniol',
'ruta_store'=>'idioma.store',
'ruta_edit'=>'idioma.update'
])
<!--End componente documento-->
