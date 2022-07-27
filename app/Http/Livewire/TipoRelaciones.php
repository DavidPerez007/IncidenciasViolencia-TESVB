<?php

namespace App\Http\Livewire;

use App\Models\TipoRelacion;
use Livewire\Component;

class TipoRelaciones extends Component
{
    public $tipo_relaciones, $tipo_relacion, $id_tiporelacion;
    public $isOpen=0; 

    public function render()
    {
        $this->tipo_relaciones=TipoRelacion::all();
        return view('livewire.tipo_relaciones.tipo-relaciones');
    }
}
