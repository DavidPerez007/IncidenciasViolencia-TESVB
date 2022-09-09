
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script type="text/text/javascript"src="{{asset("js/app.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Generales
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url("nacionalidad")}}">Nacionalidades</a>
                                    <a class="nav-link" href="{{url("pais")}}">Paises</a>
                                    <a class="nav-link" href="{{url("vivienda")}}">Viviendas</a>
                                    <a class="nav-link" href="{{url("domicilio")}}">Domicilios</a>
                                    <a class="nav-link" href="{{url("municipio")}}">Municipios</a>
                                    <a class="nav-link" href="{{url("escolaridad")}}">Escolaridades</a>
                                    <a class="nav-link" href="{{url("ambito_violencia")}}">Ambitos de Violencia</a>
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



                                </nav>
                            </div>
                            <!--   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                 <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                 Pages
                                 <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                             </a>
                             <div class="sb-sidenav-menu-heading">Addons</div>
                           <a class="nav-link" href="charts.html">
                                 <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                 Charts
                             </a>
                             <a class="nav-link" href="tables.html">
                                 <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                 Tables
                             </a>-->
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

    <footer class="py-4 bg-light mt-auto">
        <!--<div class="container-fluid px-4">
            <div class="d-flex align-center justify-content-between small">
                <div class="text-muted align-center">Tecnológico de estudios Superiores de Valle de Bravo</div>

            </div>
        </div>-->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="{{ mix('/js/app.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    @stack('modals')
    @stack('scripts')

    @livewireScripts
</html>
