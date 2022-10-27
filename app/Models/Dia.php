<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dia extends Model
{
    use HasFactory,SoftDeletes;
    public function horarios()
    {
        return $this->hasMany(Horario::class,'dias_id','id');
    }
}
