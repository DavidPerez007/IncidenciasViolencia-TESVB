<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domicilio extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = "domicilio";
    protected $primaryKey = "id_domicilio";
    protected $fillable = ['id_domicilio', 'calle', 'no_exterior', 'no_interior', 'colonia', 'cod_postal', 'id_municipio'];


    static $rules = [
        'calle' => 'required',
        'no_exterior' => 'required',
        'no_interior' => 'required',
        'colonia' => 'required',
        'cod_postal' => 'required',
        'id_municipio' => 'required',

    ];
}
