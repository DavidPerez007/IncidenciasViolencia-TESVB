@extends('layouts.app')
@section('contenido')

    <div class="text-end">
        <button type="button" class="btn btn-primary mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle"></i>
        </button>
    </div>

       <div class="">
           <div class="text-center"><label class="text-center"><h2>Dashboard</h2></label></div>

           <div class="card">
               <div class="card-body">

                   <table id="tablaCatalogos" class="table table-bordered table-hover table-striped  ">

                       <thead class="thead-dark bg-primary text-white  ">
                       <tr class="text-center">
                           <th>Id</th>
                           <th>Estado</th>
                           <th>Municipio </th>
                           <th>No.Casos</th>

                           <th class="size">Acción</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($datos as $dato)

                           <tr>
                               <td class="text-center">{{$loop->index+1}}</td>
                               <td class="text-center">{{$dato->$estado}} </td>
                               <td class="text-center">{{$dato->$municipio}}</td>
                               <td class="text-center">{{$dato->$count_row}}</td>
                               <td class="text-center">

                               </td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>


               </div>
           </div>
       </div>
@endsection
