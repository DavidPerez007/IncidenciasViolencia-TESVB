<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sexo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "sexo";
    protected $primaryKey = "id_sexo";
    protected $fillable = ["sexo"];

    
//Definir la reglas para el validacion de fomularios
    static $rules = [
        'sexo'=> 'required',
    ];
}
