<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <table class = "table table-bordered mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th colspan="2">Action</th>

            </tr>
        </thead>
            @foreach($viviendas as $value)
            <tr>
            <td>{{ $value->id_vivienda}}</td>
            <td>{{ $value->vivienda}}</td>
            <td>
                <button type="button" class="btn btn-success" wire:click='editar({{$value->id_vivienda}})'>Editar</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger " wire:click='destroy({{ $value->id_vivienda}})'>Borrar</button>
            </td>
        </tr>
            @endforeach
        </tbody>

    </table>

</div>
