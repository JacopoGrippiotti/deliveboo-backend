<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $casts = [
        'ingredients' => 'array'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);  //stiamo affermando che ogni piatto può avere un solo ristorante ad esso associato
    }

    public function orders(){
        return $this->belongsToMany(Order::class);  //stiamo affermando che un piatto può trovarsi all'interno di più ordini
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);  //stiamo affermando che un piatto può avere più ingredienti
    }

    public function type(){
        return $this->belongsTo(Type::class);  
    }

    public function categories(){
        return $this->belongsToMany(Category::class);  
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'course',
        'photo',
        'available'
    ];
}
