<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEstudio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'idCalidad','idInterpretacion'];

    protected $hidden = ['created_at', 'updated_at'];

    public function calidad(){
        return $this->belongsTo(Calidad::class,'idMuestra');
    }

    public function interpretacion(){
        return $this->hasMany(Interpretacion::class,'idInterpretacion');
    }
}
