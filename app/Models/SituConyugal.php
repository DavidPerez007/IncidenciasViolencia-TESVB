<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SituConyugal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="situ_conyugal";
    protected $primaryKey="id_situ_conyugal";
    protected $fillable=["situacion_conyugal"];

    static $rules = [
        'situacion_conyugal'=> 'required',

    ];
}
