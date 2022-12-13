<!--Componente catalog-->

@include('welcome',
['datos' => $datos_municipios,
'id_municipio'=>'id_municipio',
'municipio'=>'municipio',
'id_estado'=>'id_estado',
'estado'=>'estado',
'count_row'=>'count_row',

'ruta_destroy'=>'dashboard.destroy',
'ruta_store'=>'dashboard.store',
'ruta_edit'=>'dashboard.update',
],[

    'num_max' => $max,
    'num_min' => $min,
    'rango_min'=>$rango_minimo,
    'rango_max'=>$rango_maximo
])
<!--End componente catalogo-->
