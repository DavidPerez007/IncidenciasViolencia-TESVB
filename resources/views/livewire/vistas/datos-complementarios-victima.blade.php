<div class="container">
    <div class="accordion" id="accordionExample">
        <form method="POST" role="form" class="p-2">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Ingresos economico
                    </button>
                </h2> {{--Acordion Ingreso Economico--}}
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row justify-content-center">
                            <div class="col-5"> {{--CARD Actividad que realiza--}}
                                <div class="card" style="width: 29rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Actividad que realiza</h5>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check form-check-inline col-6">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Jubilada</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline col-8">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option2">
                                                    <label class="form-check-label" for="inlineRadio1">Actividad
                                                        ilicita</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option3">
                                                    <label class="form-check-label" for="inlineRadio1">Estudia</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option4">
                                                    <label class="form-check-label" for="inlineRadio1">Se
                                                        desconoce</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option5">
                                                    <label class="form-check-label" for="inlineRadio1">Trabaja fuera del
                                                        hogar</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option6">
                                                    <label class="form-check-label" for="inlineRadio1">Otro</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="actividad_realiza" value="option7">
                                            <label class="form-check-label" for="inlineRadio1">Trabaja en el
                                                hogar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3"> {{--CARD Datos de la vivienda--}}
                                <div class="card" style="width: 16rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Datos de la vivienda</h5>
                                        <div class="form-check form-check-inline col-6">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="vivienda" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Rentada</label>
                                        </div>
                                        <div class="form-check form-check-inline col-6">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="vivienda" value="option2">
                                            <label class="form-check-label" for="inlineRadio1">Prestada</label>
                                        </div>
                                        <div class="form-check form-check-inline col-6">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="vivienda" value="option3">
                                            <label class="form-check-label" for="inlineRadio1">Propia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4"> {{--CARD Ingresos de la victima--}}
                                <div class="card" style="width: 20rem;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Ingresos de la victima</h5>
                                        <label for="fuente_ingresos" class="form-label p-0 mt-1"><strong>¿Tiene una fuente de ingresos?</strong></label>
                                        <div class="row justify-content-center">
                                            <div class="col-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="fuente_ingresos" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="fuente_ingresos" value="option2">
                                                    <label class="form-check-label" for="inlineRadio1">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center p-2 mt-3"> {{--CARD Servicio medico de la victima--}}
                                <div class="card" style="width: 40rem;">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Servicio medico de la victima</h5>
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">ISSSTE</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option2">
                                                    <label class="form-check-label" for="inlineRadio1">IMSS</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option3">
                                                    <label class="form-check-label" for="inlineRadio1">SEDENA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option4">
                                                    <label class="form-check-label" for="inlineRadio1">PEMEX</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">SECMAR</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option2">
                                                    <label class="form-check-label" for="inlineRadio1">Seguro
                                                        privado</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option3">
                                                    <label class="form-check-label" for="inlineRadio1">Becas para
                                                        el bienestar</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option4">
                                                    <label class="form-check-label" for="inlineRadio1">Otro</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="servicio_medico" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Ninguno</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item"> {{--Acordion Formación educativa de la victima--}}
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Formación educativa de la victima
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-3"> {{--CARD Escolaridad--}}
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Escolaridad</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-6 justify-content-center">
                                                    <select id="escolaridad" class="form-select" list="datalistOptions">
                                                        <option selected>Primaria</option>
                                                        <option>Secundaria</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3"> {{--CARD Escribir--}}
                                    <div class="card " style="width: 18rem;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">¿Sabe escribir?</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-7">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sabe_escribir" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Si</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sabe_escribir" value="option2">
                                                        <label class="form-check-label mb-2" for="inlineRadio1">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4"> {{--CARD Leer--}}
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">¿Sabe leer?</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-7">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sabe_leer" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Si</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sabe_leer" value="option2">
                                                        <label class="form-check-label mb-2" for="inlineRadio1">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-item"> {{--Acordion Salud fisica de la victima--}}
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Salud fisica de la victima
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row justify-content-center p-2 mt-3"> {{--CARD Dificultades--}}
                                <div class="card" style="width: 80rem;">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-12">
                                                <label for="embarazada" class="form-label p-1 mt-2"><strong>¿Esta embarazada?</strong></label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="embarazada" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="embarazada" value="option2">
                                                    <label class="form-check-label" for="inlineRadio1">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 80rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Cuanta dificultad tiene la victima para...</h5>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_caminar" class="form-label p-3 mt-1"><strong>Caminar, subir o bajar los pies</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_caminar" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_caminar" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_caminar" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_caminar" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_ver" class="form-label p-3 mt-1"><strong>Ver, aunque use lentes </strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_ver" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_ver" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_ver" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_ver" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_mover_manos" class="form-label p-3 mt-1"><strong>Mover o usar sus manos</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_mover_manos" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_mover_manos" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_mover_manos" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_mover_manos" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_escuchar" class="form-label p-3 mt-1"><strong>Escuchar aunque use aparato auditivo</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_escuchar" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_escuchar" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_escuchar" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_escuchar" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_acti_cotidiana" class="form-label p-3 mt-1"><strong>Bañarse, vestirse o comer</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_acti_cotidiana" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_acti_cotidiana" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_acti_cotidiana" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_acti_cotidiana" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_hablar" class="form-label p-3 mt-1"><strong>Comunicarse</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_hablar" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_hablar" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_hablar" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_hablar" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dif_aprender" class="form-label p-3 mt-1"><strong>Aprender, recordar o concentrarse</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_aprender" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">No puede hacerlo</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_aprender" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Lo hace con dificultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_aprender" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Poca difultad </label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="dif_aprender" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No tiene difilcultad</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="proble_emociona" class="form-label p-3 mt-1"><strong>Enfermedades Psicologicas</strong></label>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="proble_emociona" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Muy grave</label>
                                                    </div>
                                                </div>
                                                <div class="col-3 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="proble_emociona" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Grave</label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="proble_emociona" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">No grave</label>
                                                    </div>
                                                </div>
                                                <div class="col-2 mt-4">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="proble_emociona" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">No lo padece</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="accordion-item"> {{--Acordion Redes de apoyo personal--}}
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Redes de apoyo personal
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row justify-content-center">
                                <div class="col-3 ms-2"> {{--CARD Tipo de relacion--}}
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Tipo de relacion</h5>
                                            <div class="row ms-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Personales y familiares</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option2">
                                                    <label class="form-check-label mb-2" for="inlineRadio1">Laboral</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option3">
                                                    <label class="form-check-label" for="inlineRadio1">Docente</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option4">
                                                    <label class="form-check-label mb-2" for="inlineRadio1">Comunitario/Social</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option5">
                                                    <label class="form-check-label" for="inlineRadio1">Institucional</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_relacion" value="option6">
                                                    <label class="form-check-label mb-2" for="inlineRadio1">Otro</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3"> {{--CARD Tipo de apoyo--}}
                                    <div class="card" style="width: 25rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Tipo de apoyo</h5>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline col-6">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Economico</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline col-8">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option2">
                                                        <label class="form-check-label" for="inlineRadio1">Salud</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option3">
                                                        <label class="form-check-label" for="inlineRadio1">Emocional</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option4">
                                                        <label class="form-check-label" for="inlineRadio1">Legal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option5">
                                                        <label class="form-check-label" for="inlineRadio1">Estructural</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option6">
                                                        <label class="form-check-label" for="inlineRadio1">Capacitacion</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option5">
                                                        <label class="form-check-label" for="inlineRadio1">Consejo/ Asesoria</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option6">
                                                        <label class="form-check-label" for="inlineRadio1">Alimentario</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option5">
                                                        <label class="form-check-label" for="inlineRadio1">Vivienda</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option6">
                                                        <label class="form-check-label" for="inlineRadio1">Religioso</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option5">
                                                        <label class="form-check-label" for="inlineRadio1">Laboral</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option6">
                                                        <label class="form-check-label" for="inlineRadio1">Otro</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tipo_apoyo" value="option7">
                                                <label class="form-check-label" for="inlineRadio1">Manejo medico</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>