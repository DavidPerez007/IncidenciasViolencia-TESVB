<div>
 <h1 class="mt-4">Tipo de relaciones</h1>
    <table class = "table table-bordered mt-5">
      <thead>
          <tr>
              <th>No.</th>
              <th>Descripcion</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($tipo_relaciones as $value)
          <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$value->tipo_relacion}}</td>
          </tr>
          @endforeach
      </tbody>
    </table> 
  </div>
