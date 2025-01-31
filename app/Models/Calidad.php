<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['nombre','idTipoEstudio'];

    protected $hidden = ['created_at', 'updated_at'];

    public function muestra(){
        return $this->hasMany(Muestra::class,'idCalidad');
    }

    public function tipo_de_estudio(){
        return $this->hasMany(TipoEstudio::class,'idTipoEstudio');
    }
}
