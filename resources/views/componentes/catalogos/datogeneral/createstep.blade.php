
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="exampleModalLabel">Datos Generales </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route($ruta_store) }}" id="search-form"role="form" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="card">
                        <div class="form">
                            <div class="left-side">
                                <div class="left-heading">
                                    <h3>Registro Victima</h3>
                                </div>
                                <div class="steps-content">
                                    <h3>Paso <span class="step-number">1</span></h3>
                                </div>
                                <ul class="progress-bar">
                                    <li class="active">Información Personal</li>
                                    <li>Tipo Violencia</li>
                                    <li>Caracterización Violencia</li>
                                    <li>Información Contacto</li>
                                    <li>Canalización</li>
                                </ul>

                            </div>
                            <div class="right-side">
                                <div class="main active">
                                    <div class="text">
                                        <h2>Información Personal</h2>
                                        <p>Ingresa tus datos personales</p>
                                    </div>
                                    <div class="input-text ">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="nombres" id="nombres" class="form-control" placeholder="Nombre">
                                            <label for="nombres">Nombre</label>
                                        </div>
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="ape_paterno" id="ape_paterno" class="form-control" placeholder="Apellido Paterno">
                                            <label for="ape_paterno">Apellido Paterno</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="ape_materno"  id="ape_materno" class="form-control" placeholder="Apellido Materno">
                                            <label for="ape_materno">Apellido Materno</label>
                                        </div>
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="telefono" id="telefono" class="form-control" placeholder="Telefono">
                                            <label for="telefono">Telefono</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require name="email" id="email" class="form-control" placeholder="Email">
                                            <label for="email">Correo Electrónico</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <label>Estado Civil en el que se encuentra:</label>
                                            <select type="text"required require  name="id_situ_conyugal" id="id_situ_conyugal" class="form-control">
                                                <option value="">Elegir estado civil</option>
                                                @foreach($datos_situacion_conyugal as $dato_situacion_conyugal)
                                                    <option value="{{$dato_situacion_conyugal->$id_situ_conyugal}}">{{$dato_situacion_conyugal->$situacion_conyugal}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="input-div">
                                            <label>Sexo </label>
                                            <ul class="list-group">
                                                @foreach($datos_sexo as $dato_sexo)
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="radio" required require name="id_sexo" value="{{$dato_sexo->$id_sexo}}" id="firstRadio" checked>
                                                        <label class="form-check-label" for="firstRadio">{{$dato_sexo->$sexo}}</label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Tipo de Violencia</h2>
                                    </div>

                                    <div class="input-text">

                                        <div class="input-div">
                                            <p>¿Ha tenido código 100?</p>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Si" type="radio" name="codigo100" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="No" type="radio" name="codigo100" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>Tipo de Violencia que ha sufrido</p>
                                            @foreach($datos_tipo_violencia as $dato_tipo_violencia)
                                                <div class="form-group form-check">
                                                    <input class="form-check-input  " type="checkbox" name="id_tipo_violencia[]" value="{{$dato_tipo_violencia->$id_tipo_violencia}}" id="tipo_violencia" >
                                                    <label class="form-check-label" for="tipo_violencia">
                                                        {{$dato_tipo_violencia->$tipo_violencia}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div">
                                            <label>Modalidades </label>
                                            <select type="text" required require  name="id_modalidad_violencia" id="id_nacionalidad" class="form-control">
                                                <option value="">Elegir Modalidad</option>
                                                @foreach($datos_modalidad_violencia as $dato_modalidad_violencia)
                                                    <option value="{{$dato_modalidad_violencia->$id_modalidad_violencia}}">{{$dato_modalidad_violencia->$modalidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main ">
                                    <div class="text">
                                        <h2>Caracterización de Victima</h2>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require  name="vive_con" id="vive_con" class="form-control" placeholder="Vive Con">
                                            <label for="vive_con">Vive Con</label>
                                        </div>
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require  name="curp" id="curp" class="form-control"  placeholder="Curp">
                                            <label for="curp">Curp</label>
                                        </div>
                                    </div>

                                    <div class="input-text">
                                        <div class="input-div input-group date js-date form-floating mb-3">
                                            <input type="text" required require name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control"  placeholder="">
                                            <label for="{{$fecha_nacimiento}}">Fecha de Nacimiento</label>
                                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-th"></i>
                            </span>
                                        </div>
                                        <div class="input-div form-floating mb-3">
                                            <input type="text" required require  name="{{$hijos}}" id="{{$hijos}}" class="form-control"  placeholder="Hijos">
                                            <label for="{{$hijos}}">Hijos</label>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div ">
                                            <label >¿Pertenece a un Grupo étnico? </label>
                                            <div class="form-check">
                                                <input class="form-check-input" value="Si" type="radio" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}">
                                                <label class="form-check-label" for="{{$grupo_etnico}}">
                                                    Si
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="No" type="radio" name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" onclick="myFunctionCheck()">
                                                <label class="form-check-label" for="{{$grupo_etnico}}">
                                                    No
                                                </label>
                                            </div>
                                            <script>function myFunctionCheck(){
                                                    console.log("Grupo etnico no");
                                                    let html_select='<option value=""></option>';
                                                    for(let i=1;i==1;i++) {
                                                        html_select += '<option value=""></option>';

                                                    }
                                                }</script>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <p>Nacionalidad: </p>
                                            <select type="text" required require  name="id_nacionalidad" id="id_nacionalidad" class="form-control">
                                                <option value="">Elegir Nacionalidad</option>
                                                @foreach($datos_nacionalidad as $dato_nacionalidad)
                                                    <option value="{{$dato_nacionalidad->$id_nacionalidad}}">{{$dato_nacionalidad->$nacionalidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-div">
                                            <p>Idioma: </p>
                                            <select type="text" required require  name="id_idioma" id="id_idioma" class="form-control">
                                                <option value="">Elegir Idioma</option>
                                                @foreach($datos_idioma as $dato_idioma)
                                                    <option value="{{$dato_idioma->$id_idioma}}">{{$dato_idioma->$idioma_espaniol}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
                                        <button class="next_button">Siguiente</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <div class="text">
                                        <h2>Informacion de Contacto:</h2>
                                        <p>Ingresa los datos de tu domiclio</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div" >
                                            <label for="{{$id_domicilio}}">Domicilios</label>
                                            <select type="text" name="id_domicilio" id="id_domicilio" class="form-control">
                                                <option value="">Elegir Domicilio</option>
                                                @foreach($datos_domicilios as $dato_domicilio)
                                                    <option value="{{$dato_domicilio->$id_domicilio}}">Calle: {{$dato_domicilio->$calle}}, Colonia: {{$dato_domicilio->$colonia}} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div id="contenido">

                                        <div class="input-text">
                                            <div class="input-div" >
                                                <label for="">Agregar Domicilio:</label>
                                            </div>
                                        </div>

                                        <div class="input-text"  >
                                            <div class="input-div">
                                                <input type="text"  required require  name="calle" id="calle" class="form-control">
                                                <span>Calle</span>
                                            </div>
                                            <div class="input-div" >
                                                <input type="text" required require name="colonia" id="colonia" class="form-control" >
                                                <span>Colonia</span>
                                            </div>
                                        </div>

                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" required require name="no_interior" id="no_interior" class="form-control">
                                                <span>Número Interior</span>
                                            </div>
                                            <div class="input-div">
                                                <input type="text" required require name="no_exterior" id="no_exterior" class="form-control" >
                                                <span>Número exterior</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-text" id="municipios">
                                        <div class="input-div">
                                            <label>Codigo postal</label>
                                            <input type="text" name="cod_postal" id="cod_postal" class="form-control" placeholder="Codigo postal">
                                        </div>
                                        <div class="input-div" >
                                            <label for="">Municipio</label>
                                            <select type="text"   name="id_municipio" id="id_municipio" class="form-control">
                                                <option value="">Elegir Municipio</option>
                                                @foreach($datos_municipios as $dato_municipio)
                                                    <option value="{{$dato_municipio->$id_municipio}}">{{$dato_municipio->$municipio}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="buttons button_space">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                                        <button class="back_button">Regresar</button>
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
