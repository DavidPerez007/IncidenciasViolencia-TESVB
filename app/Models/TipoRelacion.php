<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoRelacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="tipo_relacion";
    protected $primaryKey="id_tiporelacion";
    protected $fillable=["tipo_relacion"];

    static $rules =[
        'tipo_relacion'=>'required',

    ];
}
