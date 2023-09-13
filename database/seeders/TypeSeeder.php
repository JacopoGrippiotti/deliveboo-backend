<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    
    public function run(): void
    {
        $types = [
            ["name" => "Italiana", "color" => "#FF0000"],
            ["name" => "Francese", "color" => "#0000FF"],
            ["name" => "Giapponese", "color" => "#00FF00"],
            ["name" => "Messicana", "color" => "#FF00FF"],
            ["name" => "Cinese", "color" => "#00FFFF"],
            ["name" => "Americana", "color" => "#FFFF00"],
            ["name" => "Indiano", "color" => "#FF7F00"],
            ["name" => "Mediterranea", "color" => "#008000"],
            ["name" => "Mediorientale", "color" => "#800000"],
            ["name" => "Vietnamita", "color" => "#3A79F7"]
        ];

        foreach($types as $type){
            $newType= new Type();
            $newType->name= $type['name'];
            $newType->color= $type['color'];
            $newType->save();
        }
    }
}
