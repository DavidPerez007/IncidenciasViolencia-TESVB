<div>
    {{-- Do your work, then step back. --}}

    <h1 class="mt-4">Sexo</h1>

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sexos as $value)

            <td>{{ $loop->index+1}}</td>
            <td>{{ $value->sexo}}</td>

            @endforeach
        </tbody>

    </table>

</div>