
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mujer Segura') }}</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script  type="text/javascript" src="{{asset("/js/domicilio.js")}}"></script>
    <script type="text/text/javascript" src="{{asset("js/app.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/step.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{asset("/bootstrap-dist/js/bootstrap-datepicker.min.js")}}"></script>

    <script type="text/javascript" src="{{asset("/bootstrap-dist/locales/bootstrap-datepicker.es.min.js")}}"></script>
    <link href="{{ asset('bootstrap-dist/css/bootstrap-datepicker.css') }}" rel="stylesheet">

</head>
<body>
<div class="modal-header alert alert-primary">
    <h5 class="modal-title text-center" id="exampleModalLabel">Datos Generales </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
    </button>
</div>
<form method="POST" action="{{ route($ruta_store) }}" id="search-form"role="form" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Nuevo Registro</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Paso <span class="step-number">1</span></h3>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Información Personal</li>
                        <li>Información Personal</li>
                        <li>Domicilio</li>
                    </ul>

                </div>
                <div class="right-side">

                    <div class="main active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Información Personal</h2>
                            <p>Ingresa tus datos personales</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require name="nombres" id="nombres" class="form-control">
                                <span>Nombre</span>
                                @if(old("mode")=='create')
                                    @error($nombres) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                            <div class="input-div">
                                <input type="text" required require name="ape_paterno" id="ape_paterno" class="form-control">
                                <span>Apellido Paterno</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require name="ape_materno"  id="ape_materno" class="form-control">
                                <span>Apellido Materno</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require name="telefono" id="telefono" class="form-control">
                                <span>Número de teléfono</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require name="email" id="email" class="form-control">
                                <span>Correo electrónico</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <label>Estado Civil en el que se encuentra:</label>
                                <select type="text"required require  name="id_situ_conyugal" id="id_situ_conyugal" class="form-control">
                                    <option value="">Elegir estado civil</option>
                                    @foreach($datos_situacion_conyugal as $dato_situacion_conyugal)
                                        <option value="{{$dato_situacion_conyugal->$id_situ_conyugal}}">{{$dato_situacion_conyugal->$situacion_conyugal}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="input-div">
                                <label>Sexo </label>
                                    <ul class="list-group">
                                    @foreach($datos_sexo as $dato_sexo)

                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="radio" required require name="id_sexo" value="{{$dato_sexo->$id_sexo}}" id="firstRadio" checked>
                                                <label class="form-check-label" for="firstRadio">{{$dato_sexo->$sexo}}</label>
                                            </li>
                                    @endforeach
                                    </ul>
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Información Personal</h2>
                            <p>Ingresa tus datos personales</p>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require  name="vive_con" id="vive_con" class="form-control" >
                                <span>Vive con</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require  name="curp" id="curp" class="form-control" >
                                <span>Curp</span>
                            </div>
                        </div>


                        <div class="input-text">

                            <div class="input-div input-group date js-date">
                                <input type="text" required require name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control" >
                                <span>Fecha de Nacimiento</span>
                                <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require  name="{{$hijos}}" id="{{$hijos}}" class="form-control" >
                                <span>Hijos</span>
                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>¿Pertenece a un Grupo etnico? </p>
                                <input type="text" required require name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" class="form-control" placeholder=" ">

                            </div>
                        </div>

                        <div class="input-text">
                            <div class="input-div">
                                <p>Nacionalidad: </p>
                                <select type="text" required require  name="id_nacionalidad" id="id_nacionalidad" class="form-control">
                                    <option value="">Elegir Nacionalidad</option>
                                    @foreach($datos_nacionalidad as $dato_nacionalidad)
                                        <option value="{{$dato_nacionalidad->$id_nacionalidad}}">{{$dato_nacionalidad->$nacionalidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-div">
                                <p>Idioma: </p>
                                <select type="text" required require  name="id_idioma" id="id_idioma" class="form-control">
                                    <option value="">Elegir Idioma</option>
                                    @foreach($datos_idioma as $dato_idioma)
                                        <option value="{{$dato_idioma->$id_idioma}}">{{$dato_idioma->$idioma_espaniol}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Next Step</button>
                        </div>
                    </div>
                    <div class="main ">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Domicilio:</h2>
                            <p>Ingresa los datos de tu domiclio</p>
                        </div>
                            <div class="input-text">
                                <div class="input-div" >
                                    <label for="{{$id_domicilio}}">Domicilios</label>
                                    <select type="text" name="id_domicilio" id="id_domicilio" class="form-control">
                                        <option value="">Elegir Domicilio</option>
                                        @foreach($datos_domicilios as $dato_domicilio)
                                            <option value="{{$dato_domicilio->$id_domicilio}}">Calle: {{$dato_domicilio->$calle}}, Colonia: {{$dato_domicilio->$colonia}} </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        <div id="contenido">

                            <div class="input-text">
                                <div class="input-div" >
                                    <label for="">Agregar Domicilio:</label>
                                </div>
                            </div>

                            <div class="input-text"  >
                                <div class="input-div">
                                    <input type="text"  required require  name="calle" id="calle" class="form-control">
                                    <span>Calle</span>
                                </div>
                                <div class="input-div" >
                                    <input type="text" required require name="colonia" id="colonia" class="form-control" >
                                    <span>Colonia</span>
                                </div>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require name="no_interior" id="no_interior" class="form-control">
                                    <span>Número Interior</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" required require name="no_exterior" id="no_exterior" class="form-control" >
                                    <span>Número exterior</span>
                                </div>
                            </div>
                        </div>
                        <div class="input-text" id="municipios">
                            <div class="input-div">
                                <label>Codigo postal</label>
                                <input type="text" name="cod_postal" id="cod_postal" class="form-control" placeholder="Codigo postal">
                            </div>
                            <div class="input-div" >
                                <label for="">Municipio</label>
                                <select type="text"   name="id_municipio" id="id_municipio" class="form-control">
                                    <option value="">Elegir Municipio</option>
                                    @foreach($datos_municipios as $dato_municipio)
                                        <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js" crossorigin="anonymous"></script>
<script  type="text/javascript" src="js/step.js"></script>

<script src="js/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="{{ mix('/js/app.js')}}"></script>
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
@stack('modals')
@stack('scripts')

@livewireScripts
</html>
