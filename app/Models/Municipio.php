<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public function despartamentos(){
        return $this->belongsTo(Departamento::class);
    }

    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }
}
