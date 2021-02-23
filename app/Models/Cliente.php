<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    public function lista(){
        return $this->hasOne(Lista::class , 'cliente_id');

    }
    public function user(){
        return $this->belongsTo(User::class,'vendedor_id');
    }
}
