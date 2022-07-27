<?php

namespace App\Http\Livewire;

use App\Models\SituConyugal;
use Livewire\Component;

class SituConyugales extends Component
{ 
    public $situ_conyugales, $situacion_conyugal, $id_situ_conyugal;
    public $isOpen=0; 

    public function render()
    {
        $this->situ_conyugales=SituConyugal::all();
        return view('livewire.situ_conyugal.situ-conyugales');
    }
}
