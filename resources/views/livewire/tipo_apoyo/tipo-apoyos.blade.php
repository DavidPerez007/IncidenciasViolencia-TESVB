<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Descripcion</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipo_apoyos as $value)

            <td>{{ $loop->index+1}}</td>
            <td>{{ $value->tipo_apoyo}}</td>

            @endforeach
        </tbody>



    </table>

</div>
