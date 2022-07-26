<div>
    {{-- Do your work, then step back. --}}

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
            <td>{{ $value->sexo}}

            @endforeach
        </tbody>



    </table>

</div>