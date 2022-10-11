
<div class="modal fade" id="edit-{{$dato->$id}}" tabindex="-1" aria-labelledby="edit-{{$dato->$id}}" aria-hidden="true">
    <div class="modal-dialog ">
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
                        <label for="{{$nombres}}">Nombre <small class="text-danger">*</small><br></label>
                            <input type="text" name="nombres" id="nombres" class="form-control" value="{{$dato->$nombres}}" placeholder="{{$dato->$nombres}}">
                        @if(old('dato_id') == $dato->$id)
                            @error('nombres') <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$ape_paterno}}">Apellido Paterno <small class="text-danger">*</small><br></label>
                        <input name="{{$ape_paterno}}" id="{{$ape_paterno}}" class="form-control" value="{{$dato->$ape_paterno}}"  placeholder="{{$dato->$ape_paterno}}">
                        @if(old("mode")=='create')
                            @error($ape_paterno) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$ape_materno}}">Apellido Materno <small class="text-danger">*</small><brvalue="{{$dato->$ape_materno}}"></label>
                        <input type="text" name="{{$ape_materno}}" id="{{$ape_materno}}" class="form-control" placeholder="{{$dato->$ape_materno}}">
                        @if(old("mode")=='create')
                            @error($ape_materno) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$id_situ_conyugal}}">Situacion Conyugal <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_situ_conyugal" id="id_situ_conyugal" class="form-control">
                            <option value="{{$dato->$id_situ_conyugal}}">{{$dato->$situacion_conyugal}}</option>
                            @foreach($datos_situacion_conyugal as $dato_situacion_conyugal)
                                <option value="{{$dato_situacion_conyugal->$id_situ_conyugal}}">{{$dato_situacion_conyugal->$situacion_conyugal}}</option>
                            @endforeach
                        </select>
                        @if(old("mode")=='create')
                            @error($id_situ_conyugal) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$id_sexo}}">Sexo <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_sexo" id="id_sexo" class="form-control">
                            <option value="{{$dato->$id_sexo}}">{{$dato->$sexo}}</option>
                            @foreach($datos_sexo as $dato_sexo)
                                <option value="{{$dato_sexo->$id_sexo}}">{{$dato_sexo->$sexo}}</option>
                            @endforeach
                        </select>
                        @if(old("mode")=='create')
                            @error($id_sexo) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$fecha_nacimiento}}">Fecha de Nacimiento <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control" value="{{$dato->$fecha_nacimiento}}" placeholder="{{$dato->$fecha_nacimiento}}">
                        @if(old("mode")=='create')
                            @error($fecha_nacimiento) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$hijos}}">Hijos <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$hijos}}" id="{{$hijos}}" class="form-control" value="{{$dato->$hijos}}" placeholder="{{$dato->$hijos}}">
                        @if(old("mode")=='create')
                            @error($hijos) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$telefono}}">Telefono <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$telefono}}" id="{{$telefono}}" class="form-control" value="{{$dato->$telefono}}" placeholder="{{$dato->$telefono}}"s>
                        @if(old("mode")=='create')
                            @error($telefono) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$email}}">Email <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$email}}" id="{{$email}}" class="form-control"
                               value="{{$dato->$email}}" placeholder="{{$dato->$email}}">
                        @if(old("mode")=='create')
                            @error($email) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$grupo_etnico}}">Grupo Etnico <small class="text-danger">*</small><br></label>
                        <input type="text" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" class="form-control" value="{{$dato->$grupo_etnico}}" placeholder="{{$dato->$grupo_etnico}}">
                        @if(old("mode")=='create')
                            @error($grupo_etnico) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$id_nacionalidad}}">Nacionalidad <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_nacionalidad" id="id_nacionalidad" class="form-control">
                            <option value="{{$dato->$id_nacionalidad}}">{{$dato->$nacionalidad}}</option>
                            @foreach($datos_nacionalidad as $dato_nacionalidad)
                                <option value="{{$dato_nacionalidad->$id_nacionalidad}}">{{$dato_nacionalidad->$nacionalidad}}</option>
                            @endforeach
                        </select>
                    @if(old("mode")=='create')
                            @error($id_nacionalidad) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$id_idioma}}" >Idiomas <small class="text-danger">*</small><br></label>
                        <select type="text" name="id_idioma" id="id_idioma" class="form-control">
                            <option value="{{$dato->$id_idioma}}">{{$dato->$idioma}}</option>
                            @foreach($datos_idioma as $dato_idioma)
                                <option value="{{$dato_idioma->$id_idioma}}">{{$dato_idioma->$idioma_espaniol}}</option>
                            @endforeach
                        </select>
                    @if(old("mode")=='create')
                            @error($id_idioma) <span class="text-danger">{{ $message }}</span> @enderror
                        @endif
                    </div>

                    <div class="col-12">
                        <label for="{{$id_domicilio}}">Domicilio<small class="text-danger">*</small><br></label>
                        <select type="text" name="id_domicilio" id="id_domicilio" class="form-control">
                            <option value="{{$dato->$id_domicilio}}">{{$dato->$domicilio}}</option>
                            @foreach($datos_domicilio as $dato_domicilio)
                                <option value="{{$dato_domicilio->$id_domicilio}}">{{$dato_domicilio->$calle}}</option>
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
            </form>
        </div>
    </div>
</div>


@if(old('dato_id') == $dato->$id)
                     @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
                    @endif
