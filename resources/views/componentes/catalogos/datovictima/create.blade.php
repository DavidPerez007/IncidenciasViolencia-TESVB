
<div class="modal fade" id="create" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header alert alert-primary">
          <h5 class="modal-title text-center" id="exampleModalLabel">Agregar nueva {{$nombre}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
            <form method="POST" action="{{ route($ruta_store) }}"  role="form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="create" name="mode">
                    <div class="modal-body p-5">


                        <div class="col-12">
                            <label >Datos Generales <small class="text-danger">*</small><br></label>
                            <select type="text" name="id_datos_generales" id="id_datos_generales" class="form-control">
                                <option value="">Elegir Datos</option>
                                @foreach($datos_generales as $dato_generale)
                                    <option value="{{$dato_generale->$id_datos_generales}}">{{$dato->$nombres}} {{$dato->$ape_paterno}}{{$dato->$ape_materno}}</option>
                                @endforeach
                            </select>
                            @if(old("mode")=='create')
                                @error(id_datos_generales) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="vive_con">Vive con <small class="text-danger">*</small><br></label>
                            <input type="text" name="vive_con" id="vive_con" class="form-control" placeholder="Vive con...">
                            @if(old("mode")=='create')
                                @error($vive_con) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$municipio}}">Municipio <small class="text-danger">*</small><br></label>
                            <select type="text" name="id_municipio" id="id_municipio" class="form-control">
                                <option value="">Elegir Municipio</option>
                                @foreach($datos_municipios as $dato_municipio)
                                    <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                                @endforeach
                            </select>
                            @if(old("mode")=='create')
                                @error(id_municipio) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$curp}}">Curp <small class="text-danger">*</small><br></label>
                            <input type="text" name="{{$curp}}" id="{{$curp}}" class="form-control" placeholder="Curp...">
                            @if(old("mode")=='create')
                                @error($curp) <span class="text-danger">{{ $message }}</span> @enderror
                            @endif
                        </div>

                        <div class="col-12">
                            <label for="{{$id_domicilio}}">Domicilio <small class="text-danger">*</small><br></label>
                            <select type="text" name="id_domicilio" id="id_domicilio" class="form-control">
                                <option value="">Elegir Municipio</option>
                                @foreach($datos_domicilios as $dato_domicilio)
                                    <option value="{{$dato_domicilio->$id_domicilio}}">Calle: {{$dato_domicilio->$calle}}, Colonia: {{$dato_domicilio->$colonia}} </option>
                                @endforeach
                            </select>
                            @if(old("mode")=='create')
                                @error($id_domicilio) <span class="text-danger">{{ $message }}</span> @enderror
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
