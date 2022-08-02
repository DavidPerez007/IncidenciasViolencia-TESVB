<div>
    {{-- The whole world belongs to you. --}}

    <h1 class="mt-4">Dificultad</h1>

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            <tr>
        <thead>
        <tbody>
            @foreach($dificultades as $value)

            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->dificultad}}</td>
            </tr>
            @endforeach
        </tbody>  
        
    </table>

</div>

  
