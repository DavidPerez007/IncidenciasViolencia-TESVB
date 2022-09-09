<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1 class="mt-4">Nacionalidades</h1>

    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nacionalidades as $value)
            <tr>
                <td>{{ $value->id_nacionalidad}}</td>
                <td>{{ $value->nacionalidad}}</td>
            {{--
                <td>
                    <button wire:click="edit({{ $value->id_nacionalidad }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $value->id_nacionalidad }})" class="btn btn-danger btn-sm">Delete</button>
                </td>            --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
