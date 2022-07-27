<div>
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>No.</th>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($escolaridades as $value)
            <tr>
                <td>{{ $loop->index+1}}</td>
                <td>{{ $value->escolaridad}}</td>
            {{--
                <td>
                    <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>            --}}
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
