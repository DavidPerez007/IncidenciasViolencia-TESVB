<?php

namespace App\Http\Livewire;

use App\Models\Pais;
use Livewire\Component;

class Paises extends Component
{
public $paises, $pais, $id_pais;
public $isOpen=0; 

    public function render()
    {
        $this->paises=Pais::all();
        return view('livewire.pais.pais');
    }
}
