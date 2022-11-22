
<div class="modal fade" id="seguimiento-{{$dato->$id}}" tabindex="-1" aria-labelledby="seguimiento " aria-hidden="true">
    <div class="modal-dialog " >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="seguimiento">Ruta de Seguimiento </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
             <form method="POST" action="{{ route($ruta_seguir) }}" id="search-form"role="form" enctype="multipart/form-data">
                    @csrf
                <div class="container">
                    <div class="card">
                        <div class="main active">
                            <div class="text">
                                <h2>Canalización Victima:</h2>
                            </div>

                            <input type="hidden" value="{{$dato->$id}}" name="dato_id">
                            <div class="input-text">
                                <div class="input-div form-floating mb-3">
                                    <input type="text" required require name="dependencia" id="dependencia" class="form-control" placeholder="Dependencia">
                                    <label for="dependencia">Dependencia</label>
                                </div>
                            </div>

                            <div class="input-text">
                                <div class="input-div form-floating mb-3">
                                    <input type="text" required require name="observaciones" id="observaciones" class="form-control" placeholder="">
                                    <label for="observaciones">Observaciones</label>
                                </div>
                            </div>
                            <div class="buttons button_space">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                <button type="submit" class="btn btn-primary" >Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

             </form>
        </div>
    </div>
</div>
