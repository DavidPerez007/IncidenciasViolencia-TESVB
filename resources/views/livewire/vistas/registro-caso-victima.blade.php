<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Datos generales de la victima
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row justify-content-center p-2 mt-2">
                        <div class="col-auto">
                            <label for="curp" class="form-label mt-1">CURP</label>
                        </div>
                        <div class="col-3">
                            <input id="curp" type="text" class="form-control">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-success mb-3" type="submit">BUSCAR</button>
                        </div>
                    </div>
                    <form method="POST" role="form" class="p-2">
                        <div class="row p-2">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="nombres" class="col-form-label col-sm-3 p-0 mt-1">Nombre(s):</label>
                                    <div class="col-9">
                                        <input type="text" name="nombres" id="nombres" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="ape_paterno" class="col-form-label col-sm-5 p-0 mt-1">Primer apellido:
                                        *</label>
                                    <div class="col-7">
                                        <input id="ape_paterno" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="ape_materno" class="col-form-label col-sm-5 p-0 mt-1">Segundo
                                        apellido:</label>
                                    <div class="col-7">
                                        <input id="ape_materno" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row p-2 mt-3">
                            <div class="col-2">
                                <div class="col form-group row">
                                    <label for="pais" class="col-form-label col-sm-3 p-0 mt-1">País:</label>
                                    <div class="col-9">
                                        <select id="pais" class="form-select" list="datalistOptions">
                                            <option selected>México</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="col form-group row">
                                    <label for="estado" class="col-form-label col-sm-3 p-0 mt-1">Estado:</label>
                                    <div class="col-9">
                                        <select id="estado" class="form-select" list="datalistOptions">
                                            <option selected>Estado de México</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="col form-group row">
                                    <label for="sexo" class="col-form-label col-sm-3 p-0 mt-1">Sexo:</label>
                                    <div class="col-9">
                                        <select id="sexo" class="form-select" list="datalistOptions">
                                            <option selected>Mujer</option>
                                            <option>Hombre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="col form-group row">
                                    <label for="fecha_nacimiento" class="col-form-label col-sm-6 p-0 mt-1">Fecha de
                                        nacimiento:</label>
                                    <div class="col-6">
                                        <div class="input-group date">
                                            <input type="text" class="form-control" id="datepicker">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row p-2 mt-3">
                            <div class="col-4">
                                <div class="col form-group row">
                                    <label class="col-form-label col-sm-6 p-0">Nacionalidad:</label>
                                    <div class="col-6">
                                        <select id="sexo" class="form-select" list="datalistOptions">
                                            <option selected>Mexicana</option>
                                            <option>Extranjera</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="col form-group row">
                                    <label for="email" class="col-form-label col-sm-3 p-0">Correo:</label>
                                    <div class="col-9">
                                        <input id="email" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="col form-group row">
                                    <label for="telefono" class="col-form-label col-sm-5 p-0">Teléfono:
                                    </label>
                                    <div class="col-7">
                                        <input id="telefono" type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{7}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row p-2 mt-3">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="hijos" class="form-label p-0 mt-1">¿Tiene hijos y/o hijas?:</label>
                                    <div class="ms-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="hijos" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="hijos" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="col form-group row">
                                    <label for="vive_con" class="col-form-label col-sm-5 p-0 mt-1">¿Con quién vive?:</label>
                                    <div class="col-7">
                                        <input id="vive_con" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="col form-group row">
                                    <label for="situConyugal" class="col-form-label col-sm-6 p-0 mt-1"> Situation Conyugal: *
                                    </label>
                                    <div class="col-6">
                                        <select id="situConyugal" class="form-select" list="datalistOptions">
                                            <option selected>Casada</option>
                                            <option>Divorciada</option>
                                            <option>Unión libre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Idioma
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="row p-2 mt-3">

                        <div class="col-3">
                            <div class="form-group">
                                <div class="ms-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="idioma" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Habla español</label>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <div class="ms-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="idioma" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Lengua extranjera</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-2 mt-3">
                        <div class="col-5">
                            <div class="col form-group row">
                                <label for="email" class="col-form-label col-sm-7 p-0">¿Pertenece a un grupo étnico?: *</label>
                            </div>
                        </div>
                    </div>

                    <div class="row p-2 mt-3">
                        <div class="col-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="si" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="no" value="option2">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="desconoce" value="option2">
                                <label class="form-check-label" for="inlineRadio3">Se desconoce</label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Domicilio de la victima
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="row p-2 mt-3">

                        <div class="col-4">
                            <div class="col form-group row">
                                <label class="col-form-label col-sm-4 p-0">País: *</label>
                                <div class="col-8">
                                    <select id="pais" class="form-select" list="datalistOptions">
                                        <option selected>México</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="localidad" class="col-form-label col-sm-3 p-0 mt-1">Localidad:</label>
                                <div class="col-9">
                                    <input type="text" name="localidad" id="localidad" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="no_interior" class="col-form-label col-sm-3 p-0 mt-1">No. interior:</label>
                                <div class="col-9">
                                    <input type="text" name="no_interior" id="no_interior" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="row p-2 mt-3">

                        <div class="col-4">
                            <div class="col form-group row">
                                <label class="col-form-label col-sm-4 p-0">Estado: *</label>
                                <div class="col-8">
                                    <select id="estado" class="form-select" list="datalistOptions">
                                        <option selected>Estado de México</option>
                                        <option>Otro estado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="calle" class="col-form-label col-sm-3 p-0 mt-1">Calle:</label>
                                <div class="col-9">
                                    <input type="text" name="calle" id="calle" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="no_exterior" class="col-form-label col-sm-4 p-0 mt-1">No. exterior:</label>
                                <div class="col-8">
                                    <input type="text" name="no_exterior" id="no_exterior" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row p-2 mt-3">

                        <div class="col-4">
                            <div class="col form-group row">
                                <label class="col-form-label col-sm-4 p-0">Municipio: *</label>
                                <div class="col-8">
                                    <select id="municipio" class="form-select" list="datalistOptions">
                                        <option selected>Valle de Bravo</option>
                                        <option>Otro Municipio</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="colonia" class="col-form-label col-sm-3 p-0 mt-1">Colonia: *</label>
                                <div class="col-9">
                                    <input type="text" name="colonia" id="colonia" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <label for="cod_postal" class="col-form-label col-sm-4 p-0 mt-1">Código Postal:</label>
                                <div class="col-8">
                                    <input type="text" name="cod_postal" id="cod_postal" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row p-2 mt-3">

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success mb-3" type="submit">GUARDAR</button>
                        <button class="btn btn-success mb-3" type="submit">SIGUIENTE</button>
                    </div>

                     </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
