@extends('layouts.app')
<!--Scripts for mexico WITHOUT municipios-->
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/mx/mx-all.js"></script>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@section('contenido')
<style>
    /* Styles for mexico map without municipios */
    #mapa-container {
        height: 80vh;
        max-width: 100%;
        margin: 0 auto;
    }

    .loading {
        margin-top: 10em;
        text-align: center;
        color: gray;
    }
</style>

<body>
    <div class="md:grid grid-cols-3 gap-4 mt-2">
        <div class="md:col-span-2" id="mapa-container"></div>
        <div class="text-center text-pink-700">
            <!-- Aqui se debe usar alpine para que aparezca las incidencias solo cuando se le da click -->
            <h3 class="my-4 mx-auto block">Incidencias</h3>
            <div class="my-4" id="incidencias-container">
                <!-- !!!!! Check for the incidentTable.blade.php for the view rendering here -->
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/mx/mx-all.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var data = @json($mapData);

        Highcharts.mapChart('mapa-container', {
            chart: {
                map: 'countries/mx/mx-all'
            },
            title: {
                text: 'Reportes de violencia'
            },
            subtitle: {
                text: 'México 2024'
            },
            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'top'
                }
            },
            colorAxis: {
                min: 0,
                stops: [
                    [0, '#f0cde9'], 
                    [0.25, '#e8b2d6'],
                    [0.5, '#d899c7'],
                    [0.75, '#c881b7'],
                    [1, '#b86aa8']  
                ]
            },
            series: [{
                data: data,
                name: 'Victimas registradas',
                states: {
                    hover: {
                        color: '#a80b88'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                },
                point: {
                    events: {
                        click: function () {
                            var state = this.properties['hc-key'].split('-')[1];
                            loadStatisticsForState(state);
                        }
                    }
                }
            }]
        });

        function loadStatisticsForState(state) {
            $.ajax({
                url: '/estadisticas/' + state,
                method: 'GET',
                success: function (response) {
                    $('#incidencias-container').html(response);
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
</body>

</html>
@endsection