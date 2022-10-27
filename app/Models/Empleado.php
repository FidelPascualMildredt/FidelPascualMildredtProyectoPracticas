<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory,SoftDeletes;

    public function negocio()
    {
        return $this->belongsTo(Negocio::class,'negocios_id','id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class,'usuarios_id','id');
    }



}
