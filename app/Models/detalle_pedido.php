<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    use HasFactory;


    public function pedido(){
        return $this->belongsTo(Pedido::class , 'pedido_id');
    }
    public function articulo(){
        return $this->belongsTo(Articulo::class , 'art_id');
    }
}
