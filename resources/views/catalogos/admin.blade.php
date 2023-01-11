<!--Componente catalogo-->
@include('componentes.catalogos.admin.index',
['datos' => $datos_users,
'name' => 'name',
'email' => 'email',
'auth' => 'auth',

'ruta_destroy'=>'admin.destroy',
'id'=>'id',

'nombre'=>'Usuarios',
'ruta_store'=>'admin.store',
'ruta_edit'=>'admin.update'
],[
    'datos_auth' => $datos_users_auth,
'name' => 'name',
'email' => 'email',
'auth' => 'auth',
'id'=>'id',

])
<!--End componente documento-->
