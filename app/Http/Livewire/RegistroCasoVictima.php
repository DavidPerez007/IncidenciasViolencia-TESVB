<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Domicilio;

class RegistroCasoVictima extends Component
{
    public $nombres, $ape_paterno, $ape_materno, $pais, $estado, $sexo, $nacionalidad, $email, $telefono, $hijos,
    $vive_con, $situConyugal, $idioma, $grupo_etnico, $calle, $colonia, $no_exterior, $cod_postal, $no_interior;
    public $domicilio;
    public function mount()
    {
        $this->domicilio = Domicilio::first();
        // dd($this->domicilio);
    }

    public function render()
    {
        return view('livewire.vistas.registro-caso-victima');
    }
}
