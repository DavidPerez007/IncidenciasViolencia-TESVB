<?php

namespace App\Http\Livewire;

use App\Models\Municipio;
use Livewire\Component;

class Municipios extends Component
{
public $municipios, $municipio, $id_municipio;
public $isOpen=0;

    public function render()
    {
        $this->municipios=Municipio::all();
        return view('livewire.municipio.municipio');
    }
}
