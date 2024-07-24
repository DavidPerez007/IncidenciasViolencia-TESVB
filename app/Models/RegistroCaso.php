<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistroCaso extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="registro_caso";
    protected $primaryKey="id_registro_caso";
    protected $fillable=["delincuen_organizada","denuncia","narracion_hechos","fecha_hechos","autoridad", "id_clas_violencia", "id_ambito_violencia", "id_domicilio", "created_at", "updated_at", "deleted_at"];

    static $rules = [
        // 'delincuen_organizada' => 'required',
        // 'denuncia' => 'required',
        // 'narracion_hechos' => 'required',
        // 'fecha_hechos' => 'required',
        // 'autoridad' => 'required',
        // 'id_clas_violencia' => 'required',
        // 'id_ambito_violencia' => 'required',
        // 'id_domicilio' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required',
        // 'deleted_at' => 'required',
        
        

        ];
}
