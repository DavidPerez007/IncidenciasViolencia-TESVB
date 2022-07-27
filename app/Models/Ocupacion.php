<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ocupacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="ocupacion";
    protected $primaryKey="id_actividad_realiza";
    protected $fillable=["actividad_realiza"];
}
