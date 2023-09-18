<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_name',
        'customer_address',
        'phone_number',
        'restaurant_id',
        'status',
        'total_price'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);  //stiamo affermando che un ordine può avere un solo ristorante ad esso associato
    }

    public function dishes(){
        return $this->belongsToMany(Dish::class);    //stiamo affermando che un ordine può contenere al suo interno più piatti
    }
}
