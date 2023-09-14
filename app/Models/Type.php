<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function restaurants(){
        return $this->belongsToMany(Restaurant::class);  //stiamo affermando che per ogni tipo ci possono essere più ristoranti ad esso associati
    }

    public function dishes(){
        return $this->hasMany(Dish::class);   //stiamo permettendo agli utenti loggati di avere più di un ristorante
    }
}
