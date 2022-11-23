<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RutasVictima extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="rutas_victimas";
    protected $primaryKey="id_ruta_victima";
    protected $fillable=["dependencia",'observaciones',"id_datos_generales","date"];

}
