<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Escolaridad;

class Escolaridades extends Component
{
    public $escolaridades, $escolaridad, $id_escolaridad;
    public $isOpen = 0;

    public function render()
    {
        $this->escolaridades=Escolaridad::all();
        return view('livewire.escolaridad.escolaridades');
    }
}
