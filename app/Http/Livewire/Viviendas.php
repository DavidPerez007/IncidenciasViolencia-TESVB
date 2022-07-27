<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\Vivienda;

class Viviendas extends Component
{
    public $viviendas, $vivienda, $id_vivienda;
    public $isOpen = 0;

    public function render()
    {
        $this->viviendas = Vivienda::all();
        return view('livewire.vivienda.viviendas');
    }
}
