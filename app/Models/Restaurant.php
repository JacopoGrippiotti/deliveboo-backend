<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);  //stiamo collegando il ristorante a un unico utente dicendo che un ristorante può avere un solo utente
    }

    public function dishes(){
        return $this->hasMany(Dish::class);    //stiamo permettendo al ristorante di avere più piatti 
    }

    public function types(){
        return $this->belongsToMany(Type::class); //stiamo dicendo che per ogni ristorante ci possono essere più tipi
    }

    public function orders(){
        return $this->hasMany(Order::class);     //stiamo permettendo al ristorante di avere più ordini
    }
}
