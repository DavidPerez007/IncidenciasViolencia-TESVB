<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idioma extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="idioma";
    protected $primaryKey="id_idioma";
    protected $fillable=["idioma_espaniol"];
}
