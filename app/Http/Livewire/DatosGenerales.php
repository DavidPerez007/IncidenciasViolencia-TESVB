<?php

namespace App\Http\Livewire;

use App\Models\Datos_Generales;
use Livewire\Component;

class DatosGenerales extends Component
{
public $datos_generales, $datogeneral, $id_datos_generales;
public $isOpen=0;

    public function render()
    {
        $this->datos_generales=Datos_Generales::all();
        return view('livewire.datos_generales.datos_generales');
    }
}
