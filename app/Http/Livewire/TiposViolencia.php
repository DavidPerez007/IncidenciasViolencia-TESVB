<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\TipoViolencia;

class TiposViolencia extends Component

{
    public $tipos_violencia, $tipo_violencia, $id_tipo_violencia;
    public $isOpen = 0;

    public function render()
    {
        $this->tipos_violencia = TipoViolencia::all();
        return view('livewire.tipo_violencia.tipos-violencia');
    }
}
