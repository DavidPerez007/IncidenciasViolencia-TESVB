<!--Componente catalogo-->
@include('componentes.catalogos.domicilio.index',
['datos' => $domicilios,
'calle' => 'calle',
'no_exterior' => 'no_exterior',
'no_interior' => 'no_interior',
'colonia' => 'colonia',
'cod_postal' => 'cod_postal',
'id_municipio' => 'id_municipio',
'ruta_destroy'=>'domicilio.destroy',
'id'=>'id_domicilio',
'nombre'=>'Lista de Domicilios agreados',
'ruta_store'=>'domicilio.store',
'ruta_edit'=>'domicilio.update'
])
<!--End componente documento-->
