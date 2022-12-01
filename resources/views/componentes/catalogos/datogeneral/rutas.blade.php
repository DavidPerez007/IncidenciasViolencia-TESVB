
<div class="modal fade" id="seguir_ruta-{{$dato->$id}}" tabindex="-1" aria-labelledby="seguir_ruta" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="seguir_ruta">Ruta de Seguimiento </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <div class="container">
                    <div class="card">
                       <div class="text-end">
                           <button type="button" class="btn  mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#seguimiento" hidden>
                               <i class="fas fa-plus-circle "></i> Agregar Seguimiento
                           </button>
                       </div>

                        <form method="POST" action="{{ route($ruta_seguir) }}" id="search-form"role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="text">
                                    <h2>Seguimiento de la Victima</h2>
                                </div>

                                <input type="hidden" value="{{$dato->$id}}" name="dato_id" id="dato_id">

                                <div class="input-text">
                                    <div class="input-div form-floating mb-3">
                                        <input type="text" required require name="dependencia" id="dependencia" class="form-control" placeholder="Dependencia">
                                        <label for="dependencia">Dependencia</label>
                                    </div>

                                    <div class="input-div form-floating mb-3">
                                        <input type="text" required require name="observaciones" id="observaciones" class="form-control" placeholder="">
                                        <label for="observaciones">Observaciones</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <button type="submit" class="btn btn-primary mb-3" >Registrar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                    </div>
                                </div>
                            </div>

                        </form>


                       <div class="form" id="container{{$dato->$id}}">

                       </div>

                    </div>
                </div>

            <script>
                function myFunctionRutaCheck(id){
                  //  let id = id;
                    console.log(id);
                    //ajax
                    $.get('/api/ruta/'+id+'/rutas', function (datos){
                        console.log(datos);

                        Highcharts.chart("container"+id, {

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

                                                const mydate=Date.parse(dat);

                                                data.push({
                                                    x: mydate +( 660  +j* 1000),
                                                    name: datos[0][j].dependencia,
                                                    label: datos[0][j].dependencia
                                                });
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
