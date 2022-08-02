<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\AmbitoViolencia;
use Livewire\WithPagination;

class AmbitosViolencia extends Component
{
    use WithPagination;

    public $ambitos_violencia, $ambito_violencia, $id_ambito_violencia;
    public $isOpen = 0;

    public function render()
    {
        $this->ambitos_violencia= AmbitoViolencia::all();
        return view('livewire.ambito_Violencia.ambito-Violencia');

    }}
