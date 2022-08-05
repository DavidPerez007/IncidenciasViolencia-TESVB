<div>
    {{-- The whole world belongs to you. --}}

    <h1 class="mt-4">Modalidad Violencia</h1>

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            <tr>
        <thead>
        <tbody>
            @foreach($modalidades_violencia as $value)

            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->modalidad_violencia}}</td>
            </tr>
            @endforeach
        </tbody>  
        
    </table>

</div>
