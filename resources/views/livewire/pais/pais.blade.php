<div>
<h1 class="mt-4">País</h1>
  <table class = "table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paises as $value)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$value->pais}}</td>
        </tr>
        @endforeach
    </tbody>
  </table> 
</div>
