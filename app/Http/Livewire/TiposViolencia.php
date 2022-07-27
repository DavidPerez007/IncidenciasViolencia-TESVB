<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\TipoViolencia;

class TiposViolencia extends Component

{
    public $tipo_violencias, $tipo_violencia, $id_tipo_violencia;
    public $isOpen = 0;

    public function render()
    {
        $this->tipo_violencias = TipoViolencia::all();
        return view('livewire.tipos_violencia.tipos-violencia');
    }
}
