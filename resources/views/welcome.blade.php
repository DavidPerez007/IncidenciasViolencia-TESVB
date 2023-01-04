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

                               @if    ($dato->$count_row <= $num_max and $dato->$count_row >= $rango_max)
                                   <td class="estado3"></td>
                               @elseif($dato->$count_row >= $num_min and $dato->$count_row <= $rango_min)
                                   <td class="estado1"></td>
                               @elseif($dato->$count_row >  $rango_min and $dato->$count_row < $rango_max)
                                   <td class="estado2"></td>
                               @endif

                           </tr>
                       @endforeach

                       </tbody>
                   </table>

               </div>
               {{--}}<x-maps-leaflet :centerPoint="['lat' => 19.2128167, 'long' =>  -100.1045106]"></x-maps-leaflet>

        --}}

               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25239.75273940181!2d-100.1458926943175!3d19.18213820266953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd63813218f41f%3A0xb687c3a1fb52897c!2sValle%20de%20Bravo%2C%20M%C3%A9x.!5e1!3m2!1ses-419!2smx!4v1672867796716!5m2!1ses-419!2smx" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

           </div>
       </div>
@endsection
