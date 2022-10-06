<?php

namespace App\Http\Livewire;

use App\Models\Idioma;
use Livewire\Component;

class Idiomas extends Component
{
public $idiomas, $idioma, $id_idioma;
public $isOpen=0;

    public function render()
    {
        $this->estados=Idioma::all();
        return view('livewire.idioma.idioma');
    }
}
