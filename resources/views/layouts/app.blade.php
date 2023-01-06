
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mujer Segura') }}</title>

        <script type="text/javascript" src="js/vendor/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



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

        <link rel="stylesheet" href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css    ">


        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">  </script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/timeline.js"></script>

        <script  type="text/javascript" src="{{asset("/js/ruta.js")}}"></script>
        <script  type="text/javascript" src="{{asset("/js/DataTable.js")}}"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    </head>
    <body>


        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <a class="navbar-brand ps-3" href="index.html">Mujer Segura</a>

            <button class="btn btn-link btn-sm order-2 float-right order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <button  class="btn btn-secondary float-right text-white">
                <a class="dropdown-item " href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesion') }}
                </a>
        </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"  class="d-none">
                @csrf
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url("dashboard")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Estadística de Incidencias
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="{{url("datos_generales ")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Registro Victima
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Catálogos Generales
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url("nacionalidad")}}">Nacionalidades</a>
                                    <a class="nav-link" href="{{url("pais")}}">Países</a>
                                    <a class="nav-link" href="{{url("estado")}}">Estados</a>
                                    <a class="nav-link" href="{{url("vivienda")}}">Viviendas</a>
                                    <a class="nav-link" href="{{url("municipio")}}">Municipios</a>
                                    <a class="nav-link" href="{{url("escolaridad")}}">Escolaridades</a>
                                    <a class="nav-link" href="{{url("idioma")}}">Idiomas</a>
                                    <a class="nav-link" href="{{url("ambito_violencia")}}">Ámbitos Violencia</a>
                                    <a class="nav-link" href="{{url("caso_violencia")}}">Casos de Violencia</a>
                                    <a class="nav-link" href="{{url("dificultad")}}">Dificultades</a>
                                    <a class="nav-link" href="{{url("efectos")}}">Efectos</a>
                                    <a class="nav-link" href="{{url("modalidad_violencia")}}">Modalidad Violencia</a>
                                    <a class="nav-link" href="{{url("ocupacion")}}">Ocupaciones </a>
                                    <a class="nav-link" href="{{url("sexo")}}">Sexo</a>
                                    <a class="nav-link" href="{{url("situacion_conyugal")}}">Situación Conyugal</a>
                                    <a class="nav-link" href="{{url("tipo_apoyo")}}">Tipo de Apoyo</a>
                                    <a class="nav-link" href="{{url("tipo_relacion")}}">Tipo de Relación</a>
                                    <a class="nav-link" href="{{url("tipo_violencia")}}">Tipo de Violencia</a>
                                    <a class="nav-link" href="{{url("con_sexual")}}">Consecuencias Sexuales</a>
                                    <a class="nav-link" href="{{url("domicilio")}}">Domicilios</a>
                                </nav>
                            </div>

                            <div class="collapse" id="registro" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="{{url("clas_violencia ")}}">Clasificación de la violencia</a>
                                    <a class="nav-link" href="{{url("datos_generales ")}}">Datos Generales</a>
                                    <a class="nav-link" href="{{url("registro_victima ")}}">Registrar Victimas</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="px-4">
                        {{-- {{$slot ?? ''}} --}}
                        @yield('contenido')
                    </div>
                </main>
            </div>
        </div>
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
