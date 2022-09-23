<div>
<h1 class="mt-4">Estado</h1>
  <table class = "table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Calle</th>
            <th>No_exterior</th>
            <th>No_Interior</th>
            <th>Colonia</th>
            <th>Codigo postal</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($domicilios as $value)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$value->calle}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
