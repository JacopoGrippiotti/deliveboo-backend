<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function dishes(){
        return $this->belongsToMany(Dish::class);  //stiamo affermando che un ingrediente può trovarsi in piatti differenti 
    }

    protected $fillable = ['name'];
}
