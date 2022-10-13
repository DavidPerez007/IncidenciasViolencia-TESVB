@extends('layouts.app')
@section('contenido')
    <!-- Button trigger modal -->
    <div class="text-end">
        <button type="button" class="btn btn-primary mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle"></i> Agregar
        </button>
    </div>
    <div class="">
        <div class="text-center"><label class="text-center"><h2>{{$nombre}}</h2></label></div>
        <table class="tables table-bordered table-hover table-striped  ">
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Nombre Completo</th>
                <th>Situacion Conyugal</th>
                <th>Sexo</th>
                <th>Fecha Nacimiento</th>
                <th>Hijos</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Grupo Etnico</th>
                <th>Nacionalidad</th>
                <th>Idioma</th>
                <th>Domicilio</th>
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
                    <td class="text-center">{{$dato->$email}}</td>
                    <td class="text-center">{{$dato->$grupo_etnico}}</td>
                    <td class="text-center">{{$dato->$nacionalidad}}</td>
                    <td class="text-center">{{$dato->$idioma}}</td>
                    <td class="text-center">{{$dato->$domicilio}}</td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{$dato->$id}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            </div>
                         <div class="d-inline-flex">
                                <form action="{{route($ruta_destroy, $dato->$id)}}" method="POST" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Eliminar" class="btn btn-danger mx-1"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

     @include('componentes.catalogos.datogeneral.createstep')

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
