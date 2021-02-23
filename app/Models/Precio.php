<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    use HasFactory;

    public function articulo(){
        return $this->belongsTo(Articulo::class , 'cod_art');
    }
    public function lista(){
        return $this->belongsTo(Lista::class, 'cod_lista');
    }
}
