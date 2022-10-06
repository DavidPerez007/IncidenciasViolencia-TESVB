<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsecuenciasSexuales extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="con_sexuales";
    protected $primaryKey="id_con_sexuales";
    protected $fillable=["con_sexual"];

//Definir la reglas para el validacion de fomularios
    static $rules = [
        'con_sexual'=> 'required',
    ];

}
