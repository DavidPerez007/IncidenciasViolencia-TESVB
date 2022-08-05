<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModalidadViolencia extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="modalidad_violencia";
    protected $primaryKey="id_modalidad_violencia";
    protected $fillable=["modalidad"];

    static $rules = [
        'modalidad'=> 'required',

    ];
}
