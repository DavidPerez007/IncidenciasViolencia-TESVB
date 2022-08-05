<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Efecto extends Model
{
    use HasFactory;
    use SoftDeletes;
    Protected $table="efectos";
    Protected $primaryKey="id_efectos";
    protected $fillable=["efectos"];

    //reglas para validancion de formularios
    static $rules=[
        'efectos'=>'required',
    ];
}
