@extends('layouts.app')
@section('contenido')

    <div class="text-end">
        <button type="button" class="btn btn-primary mt-4 mb-5 " data-bs-toggle="modal" data-bs-target="#create">
            <i class="fas fa-plus-circle"></i>
        </button>
    </div>
    <style>
        .estado1 {background-color : #30b91d !important; }
        .estado2 {background-color : #ffea00 !important; }
        .estado3 {background-color : #ff0000 !important; }
    </style>

       <div class="">
           <div class="text-center"><label class="text-center"><h2>Dashboard</h2></label></div>

           <div class="card">
               <div class="card-body">

                   <table id="tablaCatalogos1" class="table table-bordered table-hover table-striped  ">

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
                       <script>
                           let s={{$num_max}}
                           console.log(s);
                           let ss={{$num_min}}
                           console.log(ss);
                       </script>
                       @foreach($datos as $dato)
                           <tr>
                               <td class="text-center">{{$loop->index+1}}</td>
                               <td class="text-center">{{$dato->$estado}} </td>
                               <td class="text-center">{{$dato->$municipio}}</td>
                               <td class="text-center">{{$dato->$count_row}} </td>

                               @if    ($dato->$count_row == $num_max and $dato->$count_row > $rango_max)
                                   <td class="estado3"></td>
                               @elseif($dato->$count_row >=  $rango_min and $dato->$count_row <=  $rango_max)
                                   <td class="estado2"></td>
                               @elseif($dato->$count_row == $num_min and $dato->$count_row < $rango_min)
                                   <td class="estado1"></td>
                               @endif

                           </tr>
                       @endforeach
                       </tbody>
                   </table>


               </div>
           </div>
       </div>
@endsection
