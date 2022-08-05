<div>
    {{-- The whole world belongs to you. --}}
    <h1 class="mt-4">Ámbito Violencia</h1>

    <table class="table table-bordered mt-5">
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
                        <td>{{ $value->id_ambito_violencia}}</td>
                        <td>{{ $value->ambito}}</td>

                        <td>
                            <button wire:click = "edit({{ $value-> id_ambito_violencia}})" class="btn btn-success">Editar</button>
                            <button wire:click = "delete({{ $value-> id_ambito_violencia}})" class="btn btn-danger">Borrar</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

    </table>

</div>