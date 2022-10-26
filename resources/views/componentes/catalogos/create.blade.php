
<div class="modal fade" id="create" tabindex="-1"                  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header alert alert-primary">
          <h5 class="modal-title text-center" id="exampleModalLabel">Agregar nuevo {{$nombre}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
            <form method="POST" action="{{ route($ruta_store) }}"  role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="create" name="mode">
                    <div class="modal-body p-5">
                            <div class="col-12">
                                <label for="{{$descripcion}}">Descripción <small class="text-danger">*</small><br></label>
                                <input type="text" name="{{$descripcion}}" id="{{$descripcion}}" class="form-control" placeholder="Descripción ...">
                                @if(old("mode")=='create')
                                    @error($descripcion) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                    </div>
                    <div class="modal-footer border-white">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>

      </div>
    </div>
  </div>

