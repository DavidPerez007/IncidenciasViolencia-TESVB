<!--Componente catalogo-->
@include('componentes.catalogos.clas_violencia.index',
['datos' => $datos_clasificacion,
'tipo_violencia' => 'tipo_violencia',
'modalidad_violencia' => 'modalidad',
'ruta_destroy'=>'clas_violencia.destroy',
'id'=>'id_clas_violencia',
'nombre'=>'Clasificacion violencia',
'ruta_store'=>'clas_violencia.store',
'ruta_edit'=>'clas_violencia.update',
'ruta_e'=>'clas_violencia.edit'
],
['modalidades_violencia' => $modalidades_violencia,
'modalidad_v'=>'modalidad',
'id_modalidad_violencia'=>'id_modalidad_violencia',

'tipos_violencia' => $tipos_violencia,
'id_tipo_violencia'=>'id_tipo_violencia']
)

<!--componente catalogo-->
