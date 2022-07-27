<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vivienda extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "vivienda";
    protected $primaryKey = "id_vivienda";
    protected $fillable = ["vivienda"];
}
