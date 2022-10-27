<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use HasFactory,SoftDeletes;

    public function dia()
    {
        return $this->belongsTo(Dia::class,'dias_id','id');
    }

    public function negocio(){
        return $this->belongsTo(Negocio::class,'negocios_id','id');
    }
}
