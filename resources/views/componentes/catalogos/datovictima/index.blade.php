@extends('layouts.app')
@section('contenido')

    <!-- Button trigger modal -->

    <div class="text-end">
        <button type="button" class="btn btn-primary mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle"></i> Agregar
        </button>
    </div>

    <div class="">
        <table class="table table-bordered table-hover table-striped  ">
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Datos_Generales </th>
                <th>vive_con</th>
                <th>curp</th>
                <th>Municipio </th>
                <th>Domicilio</th>
                <th class="size">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)
                <tr>
                    <td class="text-center">{{$loop->index+1}}</td>
                    <td class="text-center">{{$dato[$id_datos_generales]}} </td>
                    <td class="text-center">{{$dato[$vive_con]}} </td>
                    <td class="text-center">{{$dato[$curp]}} </td>
                    <td class="text-center">{{$dato[$id_municipio]}} </td>
                    <td class="text-center">{{$dato[$id_domicilio]}} </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{$dato[$id]}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                              {{-- @include('componentes.catalogos.datovictima.edit')--}}
                            </div>
                         {{--<div class="d-inline-flex">
                                <form action="{{route($ruta_destroy, $dato[$id])}}" method="POST" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Eliminar" class="btn btn-danger mx-1"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    @include('componentes.catalogos.datovictima.create')
         {{--errores--}}

    @if($errors->any() && old("mode")=='create' )
        @push("scripts")
            <script type="text/javascript">
                new bootstrap.Modal(document.getElementById('create')).show();
            </script>
        @endpush
    @elseif($errors->any() && old("dato_id"))
        @push("scripts")
            <script type="text/javascript">
                new bootstrap.Modal(document.getElementById('edit-{{$dato[$id]}}')).show();
            </script>
        @endpush

    @endif

@endsection
