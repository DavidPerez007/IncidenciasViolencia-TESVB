<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escolaridad extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="escolaridad";
    protected $primaryKey="id_escolaridad";
    protected $fillable=["escolaridad"];

//Definir la reglas para el validacion de fomularios
    static $rules = [
        'escolaridad'=> 'required',
    ];

}
