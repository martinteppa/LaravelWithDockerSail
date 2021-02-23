<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    public function precio(){

        return $this->hasMany(Precio::class);
    }
    public function cliente(){

        return $this->belongsTo(Precio::class, 'cliente_id');
    }
}
