<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory,SoftDeletes;

    public function pedidos(){
        return $this->belongsToMany(Pedido::class,'detalle_pedidos','productos_id','pedidos_id')->withPivot('cantidad','precio','total','comentario');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }

    public function negocio()
    {
        return $this->belongsTo(Negocio::class,'negocios_id','id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categorias_id','id');
    }

}
