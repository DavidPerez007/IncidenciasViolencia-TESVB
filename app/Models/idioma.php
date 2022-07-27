<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class idioma extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey="id_idioma";
    protected $fillable=["idioma_espanol"];
}
