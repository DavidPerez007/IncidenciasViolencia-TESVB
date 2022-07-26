<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Dificultad;

class Dificultades extends Component
{
    public $dificultades, $dificultad, $id_dificultad;
    public $isOpen = 0;

    public function render()
    {
        $this->dificultades= Dificultad::all();
        return view('livewire.dificultad.dificultad');
    }
}
