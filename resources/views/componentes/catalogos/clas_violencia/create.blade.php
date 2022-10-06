
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
                                <label >Tipos de Violencia <small class="text-danger">*</small><br></label>
                                <select type="text" name="id_tipo_violencia" id="id_tipo_violencia" class="form-control">

                                    <option value="">Elegir tipo de violencia</option>
                                    @foreach($tipos_violencia as $violencia)
                                        <option value="{{$violencia->$id_tipo_violencia}}">{{$violencia->$tipo_violencia}}</option>
                                    @endforeach
                                </select>
                                @if(old("mode")=='create')
                                    @error($id_tipo_violencia) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif

                            </div>

                        <div class="col-12">
                            <label >Modalidad de Violencia  <small class="text-danger">*</small><br></label>
                            <select type="text" name="id_modalidad_violencia" id="id_modalidad_violencia"  class="form-control">

                                <option value="">Elegir Modalidad</option>
                                @foreach($modalidades_violencia as $modalidad_violencia)
                                    <option value="{{$modalidad_violencia->$id_modalidad_violencia}}">{{$modalidad_violencia->$modalidad_v}}</option>
                                @endforeach
                            </select>
                            @if(old("mode")=='create')
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
    </div>
  </div>

  @if(old("mode")=='crear')
       @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
@endif
