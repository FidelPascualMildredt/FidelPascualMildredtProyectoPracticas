<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolHasUsuario extends Model
{
    use HasFactory,SoftDeletes;
    public function rol()
    {
        return $this->hasOne(Rol::class,'roles_id','id');
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class,'usuarios_id','id');
    }


    protected $table = 'roles_has_usuarios';
}
