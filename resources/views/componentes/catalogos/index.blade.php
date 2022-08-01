@extends('layouts.app')
@section('contenido')

<!-- Button trigger modal -->

<div class="position-absolute top-0 end-0 mb-5 mx-3 ">
    <button type="button" class="btn btn-primary mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
    <i class="fas fa-plus-circle"></i> Agregar
    </button>
</div>





       <table class = "table table-bordered my-5 table-hover table-striped  ">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Id</th>
                    <th>Descripción</th>
                    <th class="size">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>

                <td>
                   {{$loop->index+1}}
                </td>
                <td>
                   {{$dato[$descripcion]}}
                </td>
                <td>



                    <div class="d-inline-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$dato[$id]}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        @include('componentes.catalogos.edit')
                    </div>
                    <div class="d-inline-flex">

                        <form action="{{route($ruta_destroy, $dato[$id])}}"     method="POST" class="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Eliminar" class="btn btn-danger mx-1"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
                @endforeach
            </tbody>


        </table>
        @include('componentes.catalogos.create')

        @endsection
