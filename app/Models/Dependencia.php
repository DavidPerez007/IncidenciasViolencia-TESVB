<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Dependencia extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = "dependencias";
    protected $primaryKey = "id_dependencia";
    protected $fillable = ['id_dependencia', 'dependencia'];
}
