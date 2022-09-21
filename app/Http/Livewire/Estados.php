<?php

namespace App\Http\Livewire;

use App\Models\Estado;
use Livewire\Component;

class Estados extends Component
{
public $estados, $estado, $id_estado;
public $isOpen=0;

    public function render()
    {
        $this->estados=Estado::all();
        return view('livewire.estado.estado');
    }
}
