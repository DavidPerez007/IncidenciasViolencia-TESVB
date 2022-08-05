
<div class="modal fade" id="edit-{{$dato[$id]}}" tabindex="-1" aria-labelledby="edit-{{$dato[$id]}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert alert-primary">
            <h5 class="modal-title" id="exampleModalLabel">Editar {{$nombre}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form method="POST" action="{{ route($ruta_edit,$dato[$id]) }}"  role="form" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{$dato[$id]}}" name="dato_id">


                    <div class="col-12">
                        <label for="{{$descripcion}}">Descripción <small class="text-danger">*</small></label>
                        <input type="text" name="{{$descripcion}}" id="{{$descripcion}}" class="form-control" placeholder="Descripción ...">
                        @if(old('dato_id') == $dato[$id])
                        @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                </div>
                <div class="modal-footer border-white">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@if(old('dato_id') == $dato[$id])
                     @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                    @endif
