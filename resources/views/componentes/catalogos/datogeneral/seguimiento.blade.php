
<div class="modal fade" id="seguimiento-{{$dato->$id}}" tabindex="-1" aria-labelledby="seguimiento " aria-hidden="true">
    <div class="modal-dialog " >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="seguimiento">Ruta de Seguimiento </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
             <form method="POST" action="{{ route($ruta_seguir,$dato->$id)}}" id="search-form"role="form" enctype="multipart/form-data">
                 {{ csrf_field() }}

                    <div class="modal-body">
                            <div class="text">
                                <h2>Canalización Victima:</h2>
                            </div>

                            <input type="hidden" value="{{$id}}" name="dato_id">

                        <div class="col-12">
                                <div class="input-div form-floating mb-3">
                                    <input type="text" required require name="dependencia" id="dependencia" class="form-control" placeholder="Dependencia">
                                    <label for="dependencia">Dependencia</label>
                                </div>
                            </div>

                        <div class="col-12">
                                <div class="input-div form-floating mb-3">
                                    <input type="text" required require name="observaciones" id="observaciones" class="form-control" placeholder="">
                                    <label for="observaciones">Observaciones</label>
                                </div>
                            </div>
                    </div>

                 <div class="modal-footer border-white">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                     <button type="submit" class="btn btn-primary" >Guardar</button>
                 </div>
             </form>
        </div>
    </div>
</div>
