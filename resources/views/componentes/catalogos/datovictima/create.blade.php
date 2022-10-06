
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
                                <label for="{{$nombre}}">Nombre <small class="text-danger">*</small><br></label>
                                <input type="text" name="{{$nombre}}" id="{{$nombre}}" class="form-control" placeholder="Nombre...">
                                @if(old("mode")=='create')
                                    @error($nombre) <span class="text-danger">{{ $message }}</span> @enderror
                                @endif
                            </div>
                        {{--
                                               <div class="col-12">
                                                   <label for="{{$ape_paterno}}">Apellido Paterno <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$ape_paterno}}" id="{{$ape_paterno}}" class="form-control" placeholder="Apellido Paterno...">
                                                   @if(old("mode")=='create')
                                                       @error($ape_paterno) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$ape_materno}}">Apellido Materno <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$ape_materno}}" id="{{$ape_materno}}" class="form-control" placeholder="Apellido Materno...">
                                                   @if(old("mode")=='create')
                                                       @error($ape_materno) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$pais}}">Pais <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$pais}}" id="{{$pais}}" class="form-control" placeholder="Pais...">
                                                   @if(old("mode")=='create')
                                                       @error($pais) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$estado}}">Estado <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$estado}}" id="{{$estado}}" class="form-control" placeholder="Estado...">
                                                   @if(old("mode")=='create')
                                                       @error($estado) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$id_situ_conyugal}}">id_situ_conyugal <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$id_situ_conyugal}}" id="{{$id_situ_conyugal}}" class="form-control" placeholder="Situacion Conyugal...">
                                                   @if(old("mode")=='create')
                                                       @error($id_situ_conyugal) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$id_sexo}}">id_sexo <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$id_sexo}}" id="{{$id_sexo}}" class="form-control" placeholder="Sexo...">
                                                   @if(old("mode")=='create')
                                                       @error($id_sexo) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$fecha_nacimiento}}">Fecha de Nacimiento <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control" placeholder="Fecha de Nacimiento...">
                                                   @if(old("mode")=='create')
                                                       @error($fecha_nacimiento) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$hijos}}">Hijos <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$hijos}}" id="{{$hijos}}" class="form-control" placeholder="Hijos...">
                                                   @if(old("mode")=='create')
                                                       @error($hijos) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$telefono}}">Telefono <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$telefono}}" id="{{$telefono}}" class="form-control" placeholder="Telefono...">
                                                   @if(old("mode")=='create')
                                                       @error($telefono) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$email}}">Email <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$email}}" id="{{$email}}" class="form-control" placeholder="Email...">
                                                   @if(old("mode")=='create')
                                                       @error($email) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$grupo_etnico}}">Grupo Etnico <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" class="form-control" placeholder="Grupo Etnico...">
                                                   @if(old("mode")=='create')
                                                       @error($grupo_etnico) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$id_nacionalidad}}">Id_nacionalidad <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$id_nacionalidad}}" id="{{$id_nacionalidad}}" class="form-control" placeholder="Id_nacionalidad ...">
                                                   @if(old("mode")=='create')
                                                       @error($id_nacionalidad) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$id_idioma}}">Id_idioma <small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$id_idioma}}" id="{{$id_idioma}}" class="form-control" placeholder="Idioma...">
                                                   @if(old("mode")=='create')
                                                       @error($id_idioma) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                                               <div class="col-12">
                                                   <label for="{{$id_domicilio}}">id_domicilio<small class="text-danger">*</small><br></label>
                                                   <input type="text" name="{{$id_domicilio}}" id="{{$id_domicilio}}" class="form-control" placeholder="Domicilio...">
                                                   @if(old("mode")=='create')
                                                       @error($id_domicilio) <span class="text-danger">{{ $message }}</span> @enderror
                                                   @endif
                                               </div>

                       --}}

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
