<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmbitoViolencia extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="ambito_violencia";
    protected $primaryKey="id_ambito_violencia";
    protected $fillable=["ambito"];

    static $rules =[
        'ambito'=> 'required',

    ];
}
