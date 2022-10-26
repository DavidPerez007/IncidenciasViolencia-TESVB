
<div class="modal fade" id="edit-{{$dato->$id}}  modaledit" tabindex="-1" aria-labelledby="edit-{{$dato->$id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content " >

            <div class="modal-header alert alert-primary">
                <h5 class="modal-title" id="exampleModalLabel">Editar {{$nombre}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form method="POST" action="{{ route($ruta_edit,$dato->$id) }}"  role="form" enctype="multipart/form-data">
                <div class="container">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" value="{{$dato->$id}}" name="dato_id">
                    <input type="hidden" value="{{$dato->$id_domicilio}}" name="id_domicilio">
                    <input type="hidden" value="{{$dato->$id_registro_victima}}" name="id_registro_victima">

                    <div class="card">
                        <div class="form">
                            <div class="left-side">
                                <div class="left-heading">
                                    <h3>indeed</h3>
                                </div>
                                <div class="steps-content">
                                    <h3>Step <span class="step-number">1</span></h3>
                                </div>
                                <ul class="progress-bar">
                                    <li class="active">Información Personal</li>
                                    <li>Información Personal</li>
                                    <li>Domicilio</li>
                                </ul>

                            </div>
                            <div class="right-side">
                                <div class="main active">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Editar Información Personal</h2>
                                        <p>Corrección de datos personales</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require name="nombres" id="nombres" class="form-control" value="{{$dato->$nombres}}" placeholder="{{$dato->$nombres}}">
                                            <span>Nombre</span>
                                            @if(old("mode")=='create')
                                                @error($nombres) <span class="text-danger">{{ $message }}</span> @enderror
                                            @endif
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require name="ape_paterno" id="ape_paterno" class="form-control" value="{{$dato->$ape_paterno}}"  placeholder="{{$dato->$ape_paterno}}">
                                            <span>Apellido Paterno</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require name="ape_materno"  id="ape_materno" class="form-control" value="{{$dato->$ape_materno}}"  placeholder="{{$dato->$ape_materno}}">
                                            <span>Apellido Materno</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require name="telefono" id="telefono" class="form-control" value="{{$dato->$telefono}}" placeholder="{{$dato->$telefono}}">
                                            <span>Número de teléfono</span>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require name="email" id="email" class="form-control" value="{{$dato->$email}}" placeholder="{{$dato->$email}}">
                                            <span>Correo electrónico</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <label>Situación Conyugal</label>
                                            <select type="text"required require  name="id_situ_conyugal" id="id_situ_conyugal" class="form-control">
                                                <option value="{{$dato->$id_situ_conyugal}}">{{$dato->$situacion_conyugal}}</option>
                                                @foreach($datos_situacion_conyugal as $dato_situacion_conyugal)
                                                    <option value="{{$dato_situacion_conyugal->$id_situ_conyugal}}">{{$dato_situacion_conyugal->$situacion_conyugal}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="input-div">
                                            <label>Sexo </label>

                                            <ul class="list-group">

                                                <li class="list-group-item">
                                                    <input class="form-check-input me-1" type="radio" required require name="id_sexo" value="{{$dato->$id_sexo}}" id="firstRadio" checked>
                                                    <label class="form-check-label" for="firstRadio">{{$dato->$sexo}}</label>
                                                </li>
                                                @foreach($datos_sexo as $dato_sexo)
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="radio" required require name="id_sexo" value="{{$dato_sexo->$id_sexo}}" id="firstRadio" >
                                                        <label class="form-check-label" for="firstRadio">{{$dato_sexo->$sexo}}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <button class="next_button">Next Step</button>
                                    </div>
                                </div>

                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Editar Información Personal</h2>
                                        <p>Corrección de datos personales</p>
                                    </div>


                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require  name="vive_con" id="vive_con" class="form-control" value="{{$dato->$vive_con}}" placeholder="{{$dato->$vive_con}}">
                                            <span>Vive con</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require  name="curp" id="curp" class="form-control" value="{{$dato->$curp}}" placeholder="{{$dato->$curp}}">
                                            <span>Curp</span>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control" value="{{$dato->$fecha_nacimiento}}" placeholder="{{$dato->$fecha_nacimiento}}">
                                            <span>Fecha de Nacimiento</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require  name="{{$hijos}}" id="{{$hijos}}" class="form-control" value="{{$dato->$hijos}}" placeholder="{{$dato->$hijos}}">
                                            <span>Hijos</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>¿Pertenece a un Grupo etnico? </p>
                                            <input type="text" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" class="form-control" value="{{$dato->$grupo_etnico}}" placeholder="{{$dato->$grupo_etnico}}">
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>Nacionalidad: </p>
                                            <select type="text" required require  name="id_nacionalidad" id="id_nacionalidad" class="form-control">
                                                <option value="{{$dato->$id_nacionalidad}}">{{$dato->$nacionalidad}}</option>
                                                @foreach($datos_nacionalidad as $dato_nacionalidad)
                                                    <option value="{{$dato_nacionalidad->$id_nacionalidad}}">{{$dato_nacionalidad->$nacionalidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-div">
                                            <p>Idioma: </p>
                                            <select type="text" required require  name="id_idioma" id="id_idioma" class="form-control">
                                                <option value="{{$dato->$id_idioma}}">{{$dato->$idioma}}</option>
                                                @foreach($datos_idioma as $dato_idioma)
                                                    <option value="{{$dato_idioma->$id_idioma}}">{{$dato_idioma->$idioma_espaniol}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button">Back</button>
                                        <button class="next_button">Next Step</button>
                                    </div>
                                </div>

                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Editar Domicilio</h2>
                                        <p>Correción a los datos de tu domicilio</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require  name="calle" id="calle" class="form-control" value="{{$dato->$calle}}" placeholder="{{$dato->$calle}}">
                                            <span>Calle</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require name="colonia" id="colonia" class="form-control" value="{{$dato->$colonia}}" placeholder="{{$dato->$colonia}}" >
                                            <span>Colonia</span>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require value="{{$dato->$no_interior}}" placeholder="{{$dato->$no_interior}}" name="no_interior" id="no_interior" class="form-control" >
                                            <span>Número Interior</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require value="{{$dato->$no_exterior}}" placeholder="{{$dato->$no_exterior}}" name="no_exterior" id="no_exterior" class="form-control" >
                                            <span>Número exterior</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require value="{{$dato->$cod_postal}}" placeholder="{{$dato->$cod_postal}}" name="cod_postal" id="cod_postal" class="form-control" >
                                            <span>Codigo postal</span>
                                        </div>
                                        <div class="input-div">
                                            <p>Municipio </p>
                                            <select type="text" required require  name="id_municipio" id="id_municipio" class="form-control">
                                                <option value="">{{$dato->$id_municipio}}</option>
                                                @foreach($datos_municipios as $dato_municipio)
                                                    <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>


                                    <div class="buttons button_space">
                                        <button class="back_button">Back</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

