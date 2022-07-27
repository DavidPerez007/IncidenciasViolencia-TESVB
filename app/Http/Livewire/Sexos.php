<?php

namespace App\Http\Livewire;

use Livewire\Component;

use \App\Models\Sexo;

class Sexos extends Component

{

    public $sexos, $sexo, $id_sexo;
    public $isOpen = 0;

    public function render()
    {
        $this->sexos = Sexo::all();
        return view('livewire.sexo.sexo');
    }
}
