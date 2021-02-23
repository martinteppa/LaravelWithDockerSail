<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;


    public function detallePedido(){

        return $this->hasMany(detalle_pedido::class);
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
    
    public function cliente(){
        return $this->belongsTo(Cliente::class , 'cliente_id');
    }
}
