<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;
    protected $table="domicilio";
    protected $primaryKey="id_domicilio";
    protected $fillable=['id_domicilio','calle', 'no_exterior', 'no_interior', 'colonia', 'cod_postal', 'id_municipio'];
}
