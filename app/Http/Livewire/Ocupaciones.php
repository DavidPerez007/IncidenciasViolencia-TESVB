<?php

namespace App\Http\Livewire;

use App\Models\Ocupacion;
use Livewire\Component;

class Ocupaciones extends Component
{
    public $actividades_realiza, $actividad_realiza, $id_actividad_realiza;
    public $isOpen=0;
    public function render()
    {
        $this->actividades_realiza=Ocupacion::all();
        return view('livewire.ocupacion.ocupaciones');
    }
}
