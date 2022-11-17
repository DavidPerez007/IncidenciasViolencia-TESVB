
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mujer Segura') }}</title>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/timeline.js"></script>

    <script  type="text/javascript" src="{{asset("/js/ruta.js")}}"></script>


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

</head>
<body>
<div class="modal-header alert alert-primary">
    <h5 class="modal-title text-center" id="exampleModalLabel">Datos Generales </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
    </button>
</div>

    @csrf
    <div class="container">
        <div class="card">
    <div class="text-end">
        <button type="button" class="btn  mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle "></i> Agregar Seguimiento
        </button>
    </div>

            <div class="form" id="containee">


            </div>
        </div>
    </div>

</body>
<script>
    Highcharts.chart("containee", {
        chart: {
            zoomType: "x",
            type: "timeline"
        },
        xAxis: {
            type: "datetime",
            visible: false
        },
        yAxis: {
            gridLineWidth: 1,
            title: null,
            labels: {
                enabled: false
            }
        },
        legend: {
            enabled: false
        },
        title: {
            text: "Timeline of Space Exploration"
        },
        subtitle: {
            text:
                'Info source: '
        },
        tooltip: {
            style: {
                width: 300
            }
        },
        series: [
            {
                dataLabels: {
                    allowOverlap: false,
                    format:
                        '<span style="color:{point.color}">● </span><span style="font-weight: bold;" > ' +
                        "{point.x:%d %b %Y}</span><br/>{point.label}"
                },
                marker: {
                    symbol: "circle"
                },
                data: [
                    {
                        x: Date.UTC(1951, 5, 22),
                        name: "First dogs in space",
                        label: "First dogs in space",
                        description:
                            "Dezik and Tsygan were the first dogs to make a sub-orbital flight on 22 July 1951. Both dogs were recovered unharmed after travelling to a maximum altitude of 110 km."
                    },
                    {
                        x: Date.UTC(1957, 9, 4),
                        name: "First artificial satellite",
                        label: "First artificial satellite",
                        description:
                            "Sputnik 1 was the first artificial Earth satellite. The Soviet Union launched it into an elliptical low Earth orbit on 4 October 1957, orbiting for three weeks before its batteries died, then silently for two more months before falling back into the atmosphere."
                    },
                    {
                        x: Date.UTC(1959, 0, 4),
                        name: "First artificial satellite to reach the Moon",
                        label: "First artificial satellite to reach the Moon",
                        description:
                            "Luna 1 was the first artificial satellite to reach the Moon vicinity and first artificial satellite in heliocentric orbit."
                    },
                ]
            }
        ]
    });


</script>

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
