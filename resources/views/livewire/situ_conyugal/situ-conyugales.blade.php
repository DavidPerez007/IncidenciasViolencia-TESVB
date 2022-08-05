<div>

<h1 class="mt-4">Situación Conyugal</h1>

    <table class = "table table-bordered mt-5">
      <thead>
          <tr>
              <th>No.</th>
              <th>Descripcion</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($situ_conyugales as $value)
          <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$value->situ_conyugal}}</td>
          </tr>
          @endforeach
      </tbody>
    </table> 
  </div>