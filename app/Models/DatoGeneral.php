<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DatoGeneral extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="datos_generales";
    protected $primaryKey="id_datos_generales";
    protected $fillable=["nombres","ape_paterno","ape_materno",
                        "fecha_nacimiento","hijos","telefono","email","grupo_etnico",
                        "id_situ_conyugal","id_sexo","id_nacionalidad","id_idioma",
                        "id_domicilio"];

    static $rules = [
        'nombres' => 'required',
        'ape_paterno' => 'required',
        'ape_materno' => 'required',
        'id_situ_conyugal' => 'required',
        'id_sexo' => 'required',

        'hijos' => 'required',
        'telefono' => 'required',
        'email' => 'required',
        'grupo_etnico' => 'required',
        'id_nacionalidad' => 'required',
        'id_idioma' => 'required',
        'id_domicilio' => 'required',

    ];
}
