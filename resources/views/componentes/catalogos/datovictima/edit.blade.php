
<div class="modal fade" id="edit-{{$dato->$id}}" tabindex="-1" aria-labelledby="edit-{{$dato->$id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header alert alert-primary">
            <h5 class="modal-title" id="exampleModalLabel">Editar {{$nombre}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form method="POST" action="{{ route($ruta_edit,$dato->$id) }}"  role="form" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{$dato->$id}}" name="dato_id">

                    <div class="col-12">
                        <label >Datos Generales <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_datos_generales" id="id_datos_generales" class="form-control">
                            <option value="{{$dato->$id_datos_generales}}">{{$dato->$nombres}} {{$dato->$ape_paterno}}{{$dato->$ape_materno}}</option>

                            @foreach($datos_generales as $dato_generale)
                                <option value="{{$dato_generale->$id_datos_generales}}">{{$dato_generale->$nombres}} {{$dato_generale->$ape_paterno}}{{$dato_generale->$ape_materno}}</option>
                            @endforeach
                        </select>
                        @if(old('dato_id') == $dato->$id)
                            @error('id_datos_generales') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>


                    <div class="col-12">
                        <label for="{{$vive_con}}">Vive con <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$vive_con}}" id="{{$vive_con}}" class="form-control" value="{{$dato->$vive_con}}"placeholder="{{$dato->$vive_con}}">
                        @if(old('dato_id') == $dato->$id)
                            @error('vive_con') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$curp}}">CURP <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$curp}}" id="{{$curp}}" class="form-control" value="{{$dato->$curp}}"placeholder="{{$dato->$vive_con}}">
                        @if(old('dato_id') == $dato->$id)
                            @error('curp') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label >Municipio <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_municipio" id="id_municipio" class="form-control">
                            <option value="{{$dato->$id_municipio}}">{{$dato->$municipio}}</option>
                            @foreach($datos_municipios as $dato_municipio)
                                <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                            @endforeach
                        </select>
                        @if(old('dato_id') == $dato->$id)
                            @error('id_municipio') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label >Domicilio <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_domicilio" id="id_domicilio" class="form-control">
                            <option value="{{$dato->$id_domicilio}}">Calle: {{$dato->$calle}}, Colonia: {{$dato->$colonia}} </option>
                            @foreach($datos_domicilios as $dato_domicilio)
                                <option value="{{$dato_domicilio->$id_domicilio}}">Calle: {{$dato_domicilio->$calle}}, Colonia: {{$dato_domicilio->$colonia}} </option>
                            @endforeach
                        </select>
                        @if(old('dato_id') == $dato->$id)
                            @error('id_domicilio') <span class="text-danger">{{ $message }}</span> @enderror
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
