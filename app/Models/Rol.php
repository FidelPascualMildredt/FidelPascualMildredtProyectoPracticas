<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rol extends Model
{
    use HasFactory,SoftDeletes;


    protected $table = 'roles';
//

// se define en el modelo
    protected $fillable = [
        'nombre'];

    public function has_usuarios(){
        return $this->belongsToMany(User::class,'roles_has_usuarios','roles_id','usuarios_id');
    }
}
