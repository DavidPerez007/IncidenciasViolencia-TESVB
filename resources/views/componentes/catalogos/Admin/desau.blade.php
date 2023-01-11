
<div class="modal fade" id="edit-{{$dato_auth->$id}}" tabindex="-1" aria-labelledby="edit-{{$dato_auth->$id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title" id="exampleModalLabel">Desautorizar {{$nombre}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form method="POST" action="{{ route($ruta_edit,$dato_auth->$id) }}" role="form" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{$dato_auth->$id}}" name="dato_id">
                    <input type="hidden" value="{{$dato_auth->$auth}}" name="auth">
                    <h2>Desautorizar usuario</h2>

                </div>
                <div class="modal-footer border-white">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@if(old('dato_id') == $dato_auth->$id)
    @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
@endif
