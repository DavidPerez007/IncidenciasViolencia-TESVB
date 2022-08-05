<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <h1 class="mt-4">Servicio Médico</h1>

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicio_medicos as $value)

            <td>{{ $loop->index+1}}</td>
            <td>{{ $value->servicio_medico}}</td>

            @endforeach
        </tbody>

    </table>
</div>
