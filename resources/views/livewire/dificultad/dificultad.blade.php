<div>
    {{-- The whole world belongs to you. --}}

    <table class = "table-bordered mt-5">
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

  
