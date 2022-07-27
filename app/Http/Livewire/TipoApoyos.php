<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\TipoApoyo;

class TipoApoyos extends Component

{
    public $tipo_apoyos, $tipo_apoyo, $id_tipo_apoyo;
    public $isOpen = 0;

    public function render()

    {
        $this->tipo_apoyos = TipoApoyo::all();
        return view('livewire.tipo_apoyo.tipo-apoyos');
    }
}
