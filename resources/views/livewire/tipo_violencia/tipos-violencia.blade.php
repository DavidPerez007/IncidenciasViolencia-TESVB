<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipo_violencias as $value)

            <td>{{ $loop->index+1}}</td>
            <td>{{ $value->tipo_violencia}}</td>

            @endforeach
        </tbody>
        
    </table>
</div>
