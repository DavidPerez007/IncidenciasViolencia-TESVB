<div>
<h1 class="mt-4">Estado</h1>
  <table class = "table table-bordered mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estados as $value)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$value->estado}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
