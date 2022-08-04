<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosCompleVictima extends Model
{
    use HasFactory;
    protected $table="datos_comple_victima";
    protected $primaryKey="id_datos_compleme_victima";
    protected $fillable=['id_datos_econo', 'id_formacion_edu', 'id_redes_apoyo', 'id_salud_fisica'];

    
}
