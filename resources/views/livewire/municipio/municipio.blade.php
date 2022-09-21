<div>
<h1 class="mt-4">Municipio</h1>
  <table class = "table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($municipios as $value)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$value->municipio}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
