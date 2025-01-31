<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interpretacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['texto','interpretacion_muestra'];

    protected $hidden = ['created_at', 'updated_at'];

    public function tipo_de_estudio(){
        return $this->belongsTo(TipoEstudio::class,'idInterpretacion');
    }

    public function muestra()
    {
        return $this->belongsToMany(Muestra::class, 'interpretacion_muestra');
    }
}
