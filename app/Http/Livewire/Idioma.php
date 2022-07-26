<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Idioma extends Component

{
    public $idioma, $idioma_espanol, $id_idioma;
    public $isOpen = 0;
    public function render()
    {
        return view('livewire.idioma.idioma');
    }
}
