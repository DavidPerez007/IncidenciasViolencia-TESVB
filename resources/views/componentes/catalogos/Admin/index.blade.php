@extends('layouts.app')
@section('contenido')

    <!-- Button trigger modal -->

    <div class="">
    <div class="card">
        <div class="card-body">
        <div class="text-center">  <H1>Usuarios no Autorizados</H1></div>
        <table class="table table-bordered table-hover table-striped  ">
            <thead class="thead-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th class="size">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datos as $dato)

                <tr>
                    <td class="text-center">{{$loop->index+1}}</td>
                    <td class="text-center">{{$dato->$name}}</td>
                    <td class="text-center">{{$dato->$email}}</td>

                    <td class="text-center">
                      <div class="d-inline-flex">
                          <button type="button" title="Autorizar" class="btn btn-success mx-1" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{$dato->$id}}">
                              <i class="fa-solid fa-check"></i>
                            </button>
                          @include('componentes.catalogos.admin.auth')
                      </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

            <div class="card-body">
                <div class="text-center">  <H1>Usuarios Autorizados</H1></div>
                <table class="table table-bordered table-hover table-striped  ">
                    <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th class="size">Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datos_auth as $dato_auth)

                        <tr>
                            <td class="text-center">{{$loop->index+1}}</td>
                            <td class="text-center">{{$dato_auth->$name}}</td>
                            <td class="text-center">{{$dato_auth->$email}}</td>

                            <td class="text-center">
                               <div class="d-inline-flex">
                                   <button type="button" title="Desautorizar"   class="btn btn-success mx-1" data-bs-toggle="modal"
                                             data-bs-target="#edit-{{$dato_auth->$id}}">
                                         <i class="fa-solid fa-check-double"></i>
                                     </button>
                                    @include('componentes.catalogos.admin.desau')
                               </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    {{--}} @include('componentes.catalogos.clas_violencia.create')
--}}

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
