<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClasificacionViolencia extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table="clas_violencia";
    protected $primaryKey="id_clas_violencia";
    protected $fillable=["id_tipo_violencia","id_modalidad_violencia"];

    static $rules = [
        'id_tipo_violencia'=> 'required',
        'id_modalidad_violencia'=>'required'

    ];
}
