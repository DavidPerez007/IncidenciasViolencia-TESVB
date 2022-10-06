
<div class="modal fade" id="edit-{{$dato->$id}}" tabindex="-1" aria-labelledby="edit-{{$dato->$id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title" id="exampleModalLabel">Editar {{$nombre}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form method="POST" action="{{ route($ruta_edit,$dato->$id) }}" role="form" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{$dato->$id}}" name="dato_id">

                    <div class="col-12">
                        <label>Tipo de violencia <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_tipo_violencia" id="id_tipo_violencia" class="form-control">
                            <option value="{{$dato->$id_tipo_violencia}}">{{$dato->$tipo_violencia}}</option>
                            @foreach($tipos_violencia as $violencia)
                                <option value="{{$violencia->$id_tipo_violencia}}">{{$violencia->$tipo_violencia}}</option>
                            @endforeach
                        </select>
                        @if(old('dato_id') == $dato->$id)
                            @error($id_tipo_violencia) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="{{$modalidad_violencia}}">Modalidad de Violencia <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_modalidad_violencia" id="id_modalidad_violencia"  class="form-control">
                        <option value="{{$dato->$id_modalidad_violencia}}">{{$dato->$modalidad_violencia}}</option>
                        @foreach($modalidades_violencia as $modalidad_violencia)
                            <option value="{{$modalidad_violencia->$id_modalidad_violencia}}">{{$modalidad_violencia->$modalidad_v}}</option>
                        @endforeach
                        </select>


                    @if(old('dato_id') == $dato->$id)
                            @error($id_modalidad_violencia) <span class="text-danger">{{ $message }}</span> @enderror
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


@if(old('dato_id') == $dato->$id)
    @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
@endif
