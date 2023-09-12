<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);  //stiamo affermando che un ordine può avere un solo ristorante ad esso associato
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class);    //stiamo affermando che un ordine può contenere al suo interno più piatti
    }
}
