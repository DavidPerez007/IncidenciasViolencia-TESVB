<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\ModalidadViolencia;

class ModalidadesViolencia extends Component
{
    public $modalidades_violencia, $modalidad_violencia, $id_modalidad_violencia;
    public $isOpen = 0;

    public function render()
    {
        $this->modalidades_violencia= ModalidadViolencia::all();
        return view('livewire.modalidad_violencia.modalidad-violencia');
    }
}
