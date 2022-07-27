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
            @foreach($ambitos_violencia as $value)

            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->ambito_violencia}}</td>
            </tr>
            @endforeach
        </tbody>  
        
    </table>

</div>
