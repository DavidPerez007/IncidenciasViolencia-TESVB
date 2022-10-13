
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content " >
            <div class="modal-header alert alert-primary">
                <h5 class="modal-title text-center" id="exampleModalLabel">Datos Generales </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route($ruta_store) }}"  role="form" enctype="multipart/form-data">
                @csrf
                   <div class="container">
                       <div class="card">
                           <div class="form">
                               <div class="left-side">
                                   <div class="left-heading">
                                       <h3>Nuevo Registro</h3>
                                   </div>
                                   <div class="steps-content">
                                       <h3>Paso <span class="step-number">1</span></h3>
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
                                           <h2>Información Personal</h2>
                                           <p>Ingresa tus datos personales</p>
                                       </div>
                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text" required require name="nombres" id="nombres" class="form-control">
                                               <span>Nombre</span>
                                               @if(old("mode")=='create')
                                                   @error($nombres) <span class="text-danger">{{ $message }}</span> @enderror
                                               @endif
                                           </div>
                                           <div class="input-div">
                                               <input type="text" required require name="ape_paterno" id="ape_paterno" class="form-control">
                                               <span>Apellido Paterno</span>
                                           </div>
                                       </div>
                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text" required require name="ape_materno"  id="ape_materno" class="form-control">
                                               <span>Apellido Materno</span>
                                           </div>
                                           <div class="input-div">
                                               <input type="text" required require name="telefono" id="telefono" class="form-control">
                                               <span>Número de teléfono</span>
                                           </div>
                                       </div>

                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text" required require name="email" id="email" class="form-control">
                                               <span>Correo electrónico</span>
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
                                               <select type="text" required require name="id_sexo" id="id_sexo" class="form-control">
                                                   <option value="">Elegir Sexo</option>
                                                   @foreach($datos_sexo as $dato_sexo)
                                                       <option value="{{$dato_sexo->$id_sexo}}">{{$dato_sexo->$sexo}}</option>
                                                   @endforeach
                                               </select>
                                           </div>
                                       </div>
                                       <div class="buttons">
                                           <button class="next_button">Next Step</button>
                                       </div>
                                   </div>
                                   <div class="main">
                                       <small><i class="fa fa-smile-o"></i></small>
                                       <div class="text">
                                           <h2>Información Personal</h2>
                                           <p>Ingresa tus datos personales</p>
                                       </div>
                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text" required require name="{{$fecha_nacimiento}}" id="{{$fecha_nacimiento}}" class="form-control" >
                                               <span>Fecha de Nacimiento</span>
                                           </div>
                                           <div class="input-div">
                                               <input type="text" required require  name="{{$hijos}}" id="{{$hijos}}" class="form-control" >
                                               <span>Hijos</span>
                                           </div>
                                       </div>
                                       <div class="input-text">
                                           <div class="input-div">
                                               <p>¿Pertenece a un Grupo etnico? </p>
                                               <input type="text" required require name="{{$grupo_etnico}}" id="{{$grupo_etnico}}" class="form-control" placeholder=" ">

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
                                           <button class="back_button">Back</button>
                                           <button class="next_button">Next Step</button>
                                       </div>
                                   </div>

                                   <div class="main">
                                       <small><i class="fa fa-smile-o"></i></small>
                                       <div class="text">
                                           <h2>Domicilio:</h2>
                                           <p>Ingresa los datos de tu domiclio</p>
                                       </div>
                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text"  required require  name="calle" id="calle" class="form-control">

                                               <span>Calle</span>
                                           </div>
                                           <div class="input-div">
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
                                       <div class="input-text">
                                           <div class="input-div">
                                               <input type="text" required require name="cod_postal" id="cod_postal" class="form-control" >
                                                <span>Codigo postal</span>
                                           </div>
                                           <div class="input-div">
                                               <p>Municipio </p>
                                               <select type="text" required require  name="id_municipio" id="id_municipio" class="form-control">
                                                   <option value="">Elegir Municipio</option>
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
