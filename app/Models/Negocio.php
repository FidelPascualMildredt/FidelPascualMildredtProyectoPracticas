<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Negocio extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
        'telefono',
        'calificacion',
        'categorias_id'
    ];

    // BelongsnTo hace reerencia a un solo registro (singular)
    // hasMany hace referencia a varios registros (plural)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categorias_id','id');
    }

    public function horarios(){
        return $this->hasMany(Horario::class,'negocios_id','id');
    }

    public function productos(){
        return $this->hasMany(Producto::class,'negocios_id','id');
    }

    public function empleados(){
        return $this->hasMany(Empleado::class,'negocios_id','id');
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class,'negocios_id','id');
    }
use SoftDeletes;
}
