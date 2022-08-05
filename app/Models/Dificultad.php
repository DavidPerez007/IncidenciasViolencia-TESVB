<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dificultad extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="dificultad";
    protected $primaryKey="id_dificultad";
    protected $fillable=["dificultad"];

    static $rules =[
        'dificultad'=> 'required',

    ];
}
