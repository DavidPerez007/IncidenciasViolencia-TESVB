<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\ServicioMedico;

class ServicioMedicos extends Component
{

    public $servicio_medicos, $servicio_medico, $id_servicio_medico;
    public $isOpen = 0;

    public function render()
    {
        $this->servicio_medicos = ServicioMedico::all();
        return view('livewire.servicio_medico.servicio-medicos');
    }
}
