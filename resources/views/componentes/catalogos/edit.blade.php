
<div class="modal fade" id="edit-{{$dato[$id]}}" tabindex="-1" aria-labelledby="edit-{{$dato[$id]}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Escriba el nuevo valor del campo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route($ruta_edit,$dato[$id]) }}"  role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <input type="hidden" value="update" name="mode">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row col-4">
                            <h5 class="modal-title text-align-center" id="exampleModalLongTitle">Editar {{$nombre}}</h5>

                        </div>
                    </div>
                    <div class="modal-body p-5">
                        <div class="row">
                            <div class="col-12">
                                <label for="{{$descripcion}}">Descripción <small class="text-danger">*</small></label>
                                <input type="text" name="{{$descripcion}}" id="{{$descripcion}}" class="form-control" placeholder="Descripción ...">
                                @if(old("mode")=='update')
                                    @error($descripcion) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-white">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>
