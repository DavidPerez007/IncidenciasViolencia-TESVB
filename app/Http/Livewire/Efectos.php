<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Efecto;

class Efectos extends Component
{
    public $efectos, $efecto, $id_efecto;
    public $isOpen =0;

    public function render()
    {
        $this->efectos=Efecto::all();
        return view('livewire.efectos.efectos');
    }
}
