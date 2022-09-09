<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nacionalidad extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="nacionalidad";
    protected $primaryKey="id_nacionalidad";
    protected $fillable=["nacionalidad"];

    static $rules = [
        'nacionalidad'=> 'required',

    ];

}
