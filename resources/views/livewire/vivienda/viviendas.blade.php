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
            @foreach($viviendas as $value)

            <td>{{ $loop->index+1}}</td>
            <td>{{ $value->vivienda}}</td>

            @endforeach
        </tbody>
        
    </table>

</div>
