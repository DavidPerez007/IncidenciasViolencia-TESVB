<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\Tipo_apoyo;

class TipoApoyos extends Component

{
    public $tipo_apoyos, $tipo_apoyo, $id_tipo_apoyo;
    public $isOpen = 0;

    public function render()

    {
        $this->tipo_apoyos = Tipo_apoyo::all();
        return view('livewire.tipo_apoyo.tipo-apoyos');
    }
}
