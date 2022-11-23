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
    <table class = "table table-bordered table-hover table-striped  ">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Calle</th>
                <th>No Exterior</th>
                <th>No Interior</th>
                <th>Colonia</th>
                <th>Codigo postal</th>
                <th class="size">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)

            <tr>
                <td class="text-center">{{$loop->index+1}}</td>
                <td class="text-center">{{$dato[$calle]}}</td>
                <td class="text-center">{{$dato[$no_exterior]}}</td>
                <td class="text-center">{{$dato[$no_interior]}}</td>
                <td class="text-center">{{$dato[$colonia]}}</td>
                <td class="text-center">{{$dato[$cod_postal]}}</td>
                <td class="text-center">
                    <div class="d-inline-flex">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$dato[$id]}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        @include('componentes.catalogos.domicilio.edit')
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
</div>

@include('componentes.catalogos.domicilio.create')
{{-- errores--}}

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
