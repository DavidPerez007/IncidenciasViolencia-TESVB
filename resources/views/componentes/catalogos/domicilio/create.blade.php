
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
                                <label for="{{$calle}}">Calle <small class="text-danger">*</small><br></label>
                                <input type="text" name="{{$calle}}" id="{{$calle}}" class="form-control" placeholder="Calle ...">
                                @if(old("mode")=='create')
                                    @error($calle) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>

                        <div class="col-12">
                            <label for="{{$no_exterior}}">No_exterior <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$no_exterior}}" id="{{$no_exterior}}" class="form-control" placeholder="No_exterior ...">
                            @if(old("mode")=='create')
                                @error($no_exterior) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$no_interior}}">No_interior <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$no_interior}}" id="{{$no_interior}}" class="form-control" placeholder="No_interior ...">
                            @if(old("mode")=='create')
                                @error($no_interior) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$colonia}}">Colonia <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$colonia}}" id="{{$colonia}}" class="form-control" placeholder="Colonia ...">
                            @if(old("mode")=='create')
                                @error($colonia) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$cod_postal}}">Codigo postal <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$cod_postal}}" id="{{$cod_postal}}" class="form-control" placeholder="Codigo postal ...">
                            @if(old("mode")=='create')
                                @error($cod_postal) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$id_municipio}}">Municipio <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$id_municipio}}" id="{{$id_municipio}}" class="form-control" placeholder="Municipio...">
                            @if(old("mode")=='create')
                                @error($id_municipio) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
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
  </div>

  @if(old("mode")=='crear')
       @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
@endif
