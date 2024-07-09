<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\RegistroVictima;

class MapViewController extends Controller
{
    private $state_abbreviations = [
        'Aguascalientes' => 'ag',
        'Baja California' => 'bc',
        'Baja California Sur' => 'bs',
        'Campeche' => 'cm',
        'Chiapas' => 'cs',
        'Chihuahua' => 'ch',
        'Coahuila' => 'co',
        'Colima' => 'cl',
        'Durango' => 'dg',
        'Guanajuato' => 'gt',
        'Guerrero' => 'gr',
        'Hidalgo' => 'hg',
        'Jalisco' => 'ja',
        'México' => 'mx',
        'Michoacán' => 'mi',
        'Morelos' => 'mo',
        'Nayarit' => 'na',
        'Nuevo León' => 'nl',
        'Oaxaca' => 'oa',
        'Puebla' => 'pue',
        'Querétaro' => 'qt',
        'Quintana Roo' => 'qr',
        'San Luis Potosí' => 'sl',
        'Sinaloa' => 'si',
        'Sonora' => 'so',
        'Tabasco' => 'tb',
        'Tamaulipas' => 'tm',
        'Tlaxcala' => 'tl',
        'Veracruz' => 've',
        'Yucatán' => 'yu',
        'Zacatecas' => 'za',
    ];

    public function showStatisticsMap()
    {
        $victims_registers = $this->getIncidentsData();
        $mapData = [];
        foreach ($victims_registers as $register) {
            $state = $register->estado;

            if (isset($this->state_abbreviations[$state])) {
                $abbreviation = $this->state_abbreviations[$state];
                $state_name = 'mx-' . $abbreviation;
                $mapData[] = [$state_name, $register->cantidad_registros];
            } else {
                // To Do
            }
        }
        return view("template.mapStatsView", compact('mapData'));
    }


    public function getStatisticsForState($state)
    {
        $clave = array_search($state, $this->state_abbreviations);

        if ($clave !== false) {
           $state = $clave;
        } else {
            //TO DO
        }
        $victims_registers = $this->getVictimsRegisters($state);

        return view("template.incidentTable", compact('victims_registers'));
    }

    private function getIncidentsData()
    {
        $incidents_data = RegistroVictima::select('estado.estado', DB::raw('COUNT(registro_victima.id_registro_victima) AS cantidad_registros'))
            ->join('municipio', 'registro_victima.id_municipio', '=', 'municipio.id_municipio')
            ->join('estado', 'municipio.id_estado', '=', 'estado.id_estado')
            ->groupBy('estado.estado')
            ->get();

        return $incidents_data;
    }

    private function getVictimsRegisters($state){
        $victim_registers = RegistroVictima::select('registro_victima.id_registro_victima', 'registro_victima.id_municipio', 'registro_victima.vive_con', 'municipio.municipio', 'estado.estado')
        ->join('municipio', 'registro_victima.id_municipio', '=', 'municipio.id_municipio')
        ->join('estado', 'municipio.id_estado', '=', 'estado.id_estado')
        ->where('estado.estado', $state)
        ->orderBy('registro_victima.id_registro_victima', 'ASC')
        ->get();

        return $victim_registers;
    }
}
