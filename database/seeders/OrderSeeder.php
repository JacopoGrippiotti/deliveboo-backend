<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\Dish;
use Faker\Generator as Faker;
use Faker\Factory as Fakerit;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         $fakerIt = Fakerit::create('it_IT');


         $restaurant= Restaurant::find(1);

         $currentYear = Carbon::now()->year; // Ottieni l'anno corrente

// Calcola la data di inizio (1° gennaio dell'anno corrente) e la data di fine (31 dicembre dell'anno corrente)
         $startDate = Carbon::create($currentYear, 1, 1, 0, 0, 0);
         $endDate = Carbon::create($currentYear, 12, 31, 23, 59, 59);

// Calcola il numero di secondi tra le due date
         $secondsDiff = $endDate->diffInSeconds($startDate);

         for ($i = 0; $i < 300; $i++) {
            $timestamp = $startDate->timestamp + rand(0, $secondsDiff);
        
            $newOrder = new Order();
            $newOrder->restaurant_id = $restaurant->id;
            $newOrder->customer_name = $fakerIt->name();
            $newOrder->customer_address = $fakerIt->streetAddress();
            $newOrder->phone_number = $fakerIt->phoneNumber();
            $newOrder->status = $faker->randomElement([1, 0]);
            $newOrder->total_price = $faker->randomFloat(2, 5.0, 40.0);
            $newOrder->created_at = Carbon::createFromTimestamp($timestamp);
            $newOrder->save();
        }
        
        
    }
}
