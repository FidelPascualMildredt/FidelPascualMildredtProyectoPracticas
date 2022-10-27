<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetallePedido extends Model
{
    use HasFactory,SoftDeletes;


    public function producto()
    {
        return $this->belongsTo(Producto::class,'productos_id','id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class,'pedidos_id','id');
    }
}
