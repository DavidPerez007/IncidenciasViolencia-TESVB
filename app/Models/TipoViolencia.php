<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoViolencia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "tipo_violencia";
    protected $primaryKey = "id_tipo_violencia ";
    protected $fillable = ["tipo_violencia"];
}
