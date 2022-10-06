<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistroVictima extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="registro_victima";
    protected $primaryKey="id_registro_victima";
    protected $fillable=["vive_con","curp","id_datos_generales","id_municipio","id_domicilio"];

    static $rules = [
        'vive_con' => 'required',
        'curp' => 'required',
        'id_datos_generales' => 'required',
        'id_municipio' => 'required',
        'id_domicilio' => 'required',

        ];
}
