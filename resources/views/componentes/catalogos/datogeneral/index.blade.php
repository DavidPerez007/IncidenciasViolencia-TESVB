@extends('layouts.app')
@section('contenido')
    <!-- Button trigger modal -->
    <div class="text-end">
        <button type="button" class="btn btn-primary mt-4 mb-5 "  data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle "></i> Agregar
        </button>
    </div>

    <div class="">
        <div class="text-center"><label class="text-center"><h2>{{$nombre}}</h2></label></div>

        <div class="card">
            <div class="card-body">

                <table id="registroVictimas" class="table table-bordered table-hover table-striped  ">

                    <thead class="thead-dark bg-primary text-white  ">
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Nombre Completo</th>
                        <th>Situacion Conyugal</th>
                        <th>Sexo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Hijos</th>
                        <th>Telefono</th>
                        <th>Grupo Etnico</th>
                        <th>Nacionalidad</th>
                        <th>Idioma</th>
                        <th>Domicilio</th>
                        <th>Municipio</th>
                        <th class="size">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datos as $dato)

                        <tr>
                            <td class="text-center">{{$loop->index+1}}</td>
                            <td class="text-center">{{$dato->$nombres}}  {{$dato->$ape_paterno}}  {{$dato->$ape_materno}}</td>
                            <td class="text-center">{{$dato->$situacion_conyugal}}</td>
                            <td class="text-center">{{$dato->$sexo}}</td>
                            <td class="text-center">{{$dato->$fecha_nacimiento}}</td>
                            <td class="text-center">{{$dato->$hijos}}</td>
                            <td class="text-center">{{$dato->$telefono}}</td>
                            {{--<td class="text-center">{{$dato->$email}}</td>----}}
                            <td class="text-center">{{$dato->$grupo_etnico}}</td>
                            <td class="text-center">{{$dato->$nacionalidad}}</td>
                            <td class="text-center">{{$dato->$idioma}}</td>
                            <td class="text-center">{{$dato->$domicilio}}</td>
                            <td class="text-center">{{$dato->$municipio}}</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <button type="button" onclick="myFunctionedit()" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#edit-{{$dato->$id}}" hidden>
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    {{-- @include('componentes.catalogos.datogeneral.editstep')
                                        --}}


                                    <form action="{{route($ruta_destroy, $dato->$id)}}" method="POST" class="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Eliminar" class="btn btn-danger mx-1"><i
                                                class="fas fa-trash"></i></button>
                                    </form>


                                    <button type="button" title="Ruta" class="btn btn-primary"
                                            onclick="myFunctionRutaCheck({{$dato->$id}})" data-bs-toggle="modal"
                                            data-bs-target="#seguir_ruta" >
                                        <i class="bi bi-map-fill"></i>
                                    </button>
                                    @include('componentes.catalogos.datogeneral.rutas')
                                </div>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @include('componentes.catalogos.datogeneral.seguimiento')
    @include('componentes.catalogos.datogeneral.create')

    @if($errors->any() && old("mode")=='create' )
        @push("scripts")
            <script type="text/javascript">
                new bootstrap.Modal(document.getElementById('create')).show();
            </script>
        @endpush
    @elseif($errors->any() && old("dato_id"))
        @push("scripts")
            <script type="text/javascript">
                new bootstrap.Modal(document.getElementById('edit-{{$dato->$id}}')).show();
            </script>
        @endpush

    @endif
@endsection
