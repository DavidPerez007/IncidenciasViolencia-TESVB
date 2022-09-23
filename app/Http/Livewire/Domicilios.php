<?php

namespace App\Http\Livewire;

use App\Models\Domicilio;
use Livewire\Component;

class Domicilios extends Component
{
public $domicilios, $domicilio, $id_domicilio;
public $isOpen=0;

    public function render()
    {
        $this->domicilios=Domicilio::all();
        return view('livewire.domicilio.domicilio');
    }
}
