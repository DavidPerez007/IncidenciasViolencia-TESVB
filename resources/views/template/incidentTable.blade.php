<!-- This is a template to show all victim cases from each state -->
<script src="https://cdn.tailwindcss.com"></script>

@if(!empty($victims_registers))
    <div class="overflow-x-auto max-h-96">
        <table class="min-w-full bg-white border border-pink-200">
            <thead>
                <tr class="bg-pink-200 text-gray-600 uppercase text-sm">
                    <th class="py-3 px-6 text-left">Municipio</th>
                    <th class="py-3 px-6 text-left">Estado</th>
                    <th class="py-3 px-6 text-left">Vive con</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($victims_registers as $register)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">{{ $register->municipio }}</td>
                        <td class="py-3 px-6 text-left">{{ $register->estado }}</td>
                        <td class="py-3 px-6 text-left">{{ $register->vive_con }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p class="text-gray-600 text-center mt-4">No se encontraron incidencias para este estado.</p>
@endif


