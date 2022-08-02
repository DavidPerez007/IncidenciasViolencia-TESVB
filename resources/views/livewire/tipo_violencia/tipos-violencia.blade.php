<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <h1 class="mt-4">Tipos de Violencia</h1>

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos_violencia as $value)
            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->tipo_violencia}}</td>
            </tr>

            @endforeach
        </tbody>

    </table>
</div>