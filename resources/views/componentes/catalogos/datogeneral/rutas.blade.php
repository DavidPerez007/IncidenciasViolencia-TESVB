
<div class="modal fade" id="seguir_ruta-{{$dato->$id}}" tabindex="-1" aria-labelledby="seguir_ruta" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="seguir_ruta">Ruta de Seguimiento </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
        {{--   <form method="POST" action="{{ route($ruta_store) }}" id="search-form"role="form" enctype="multipart/form-data">
                @csrf--}}
                <div class="container">
                    <div class="card">
                       <div class="text-end">
                           <button type="button" class="btn  mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#seguimiento-{{$dato->$id}}">
                               <i class="fas fa-plus-circle "></i> Agregar Seguimiento
                           </button>
                       </div>

                       <div class="form" id="containee">

                       </div>
                    </div>
                </div>

            <script>
                function myFunctionRutaCheck($id){
                    let id = $id;

                    //ajax

                    $.get('/api/ruta/'+id+'/rutas', function (datos){


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
                                    text: "Ruta de Seguimiento"
                                },
                                subtitle: {
                                    text:
                                        'Información de:  '+ datos[0][0].nombres+' '+datos[0][0].ape_paterno+ ' '+ datos[0][0].ape_materno
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

                                        data:
                                            (function (){
                                            var data = [],j;

                                            for ( j = 0; j < datos[0].length; j++) {
                                                var time=(new Date()).getTime();
                                                var dat=datos[0][j].date;

                                                const offset = new Date().getTimezoneOffset();
                                                console.log(offset)

                                                const mydate=Date.parse(dat);
                                                console.log(mydate)

                                                data.push({
                                                    x: mydate +( 660  +j* 1000),
                                                    name: datos[0][j].dependencia,
                                                    label: datos[0][j].dependencia
                                                });
                                                console.log(data)
                                            }
                                            return data;
                                            }())

                                    }
                                ]

                            });

                    });

                }
            </script>

        </div>
    </div>
</div>
