<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{
    use HasFactory;

    public function precios(){

        return $this->hasMany(Precio::class);
    }
    public function iva(){
        return $this->belongsTo(Iva::class, 'iva_id');
    }
}
