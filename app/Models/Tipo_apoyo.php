<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_apoyo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= "tipo_apoyo";
    protected $primaryKey = "id_tipo_apoyo";
    protected $fillable = ["tipo_apoyo"];
}
