<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicioMedico extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "servicio_medico";
    protected $primaryKey = "id_servicio_medico";
    protected $fillable = ["servicio_medico"];

}
