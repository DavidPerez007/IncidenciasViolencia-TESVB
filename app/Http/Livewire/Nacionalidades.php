<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Nacionalidad;
class Nacionalidades extends Component
{
    public $nacionalidades, $nacionalidad, $id_nacionalidad;
    public $isOpen = 0;

    public function render()
    {
        $this->nacionalidades=Nacionalidad::all();
        return view('livewire.nacionalidad.nacionalidad');
    }
}
