<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Type;
use Faker\Provider\it_IT\Address as Fakeraddress;
use Faker\Generator as Faker;
use Faker\Factory as Fakerit;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    
    public function run(Faker $faker, Fakeraddress $fakerAddress): void
    {
        $fakerIt = Fakerit::create('it_IT');
        $restaurantsNames = [

            "Italiana"=> [
              "La Trattoria Italiana",
              "Ristorante Buon Gusto",
              "Pasta Fresca da Luigi",
              "Osteria del Sole",
              "Gusto Italiano",
              "Mama Mia Trattoria",
              "Ristorante Romano",
              "Cucina di Napoli",
              "Trattoria Bella Vista",
              "Tavola Italiana",
              "Vecchio Piatto",
              "Casa delle Paste",
              "Il Gusto Raffinato",
              "Ristorante Veneto",
              "Cucina Siciliana",
              "Mangia Bene",
              "Ristorante Toscano",
              "Cucina delle Marche",
              "La Pizzeria",
              "Cucina del Sud"
            ],
            "Francese"=> [
              "Le Délice Français",
              "La Belle Étoile",
              "Café Parisien",
              "Le Bistro Charmant",
              "La Cuisine Élégante",
              "L'Art de la Table",
              "Château Gastronomique",
              "Le Gourmet Paris",
              "Le Petit Bouchon",
              "La Brasserie Française",
              "Rêves de Cuisine",
              "Le Coq au Vin",
              "La Pâtisserie Parisienne",
              "Belle Provence",
              "Le Charcutier",
              "Le Croissant Doré",
              "Soleil et Saveurs",
              "Le Vin Rouge",
              "La Crème de la Crème",
              "La Table d'Or"
            ],
            "Giapponese"=> [
              "Sakura Sushi",
              "Tokyo Teppanyaki",
              "Wasabi House",
              "Kyoto Sushi Bar",
              "Zen Garden",
              "Miso Master",
              "Sushi Sensation",
              "Umami Delights",
              "Nihon Noodles",
              "Yuzu Izakaya",
              "Sake Samurai",
              "Cherry Blossom Bites",
              "Tempura Temple",
              "Tokyo Tastes",
              "Oishii Sushi",
              "Edo Eats",
              "Sushi Soiree",
              "Sashimi Symphony",
              "Izumi Inn",
              "Bento Bliss"
            ],
            "Messicana"=> [
              "Taco Fiesta",
              "La Cantina Mexicana",
              "El Sol Picante",
              "Salsa & Sabor",
              "Burrito Bliss",
              "Fiesta Mexicana",
              "Tortilla Heaven",
              "Casa del Taco",
              "Amigo's Cantina",
              "Chili Express",
              "MexiCocina",
              "Guacamole Grill",
              "Cinco de Mayo",
              "Tequila Sunrise",
              "Enchilada Escapade",
              "Tamales Tradicionales",
              "Chimichanga Central",
              "Nachos Nirvana",
              "Quesadilla Quarters",
              "Hacienda Heat"
            ],
            "Cinese"=> [
              "Great Wall Chinese",
              "Golden Dragon Palace",
              "Dynasty Wok",
              "Peking Garden",
              "Wok Star Express",
              "Dragon Delights",
              "Chopstick Heaven",
              "Szechuan Palace",
              "Mandarin Garden",
              "Lucky Bamboo House",
              "Red Lantern Lounge",
              "Bamboo Bites",
              "Imperial Dynasty",
              "Noodle Nook",
              "China Town Grill",
              "Oriental Oasis",
              "Soy Sauce Symphony",
              "Panda Palace",
              "Silk Road Cuisine",
              "Fortune Feast"
            ],
            "Americana"=> [
              "Uncle Sam's Diner",
              "All-American Grill",
              "Star Spangled Eats",
              "Route 66 Roadhouse",
              "Liberty Burger Co.",
              "American Pie Café",
              "Yankee Doodle Diner",
              "Patriot's BBQ Joint",
              "Bald Eagle Bites",
              "Dixie Delights",
              "Cajun Creole Kitchen",
              "Wild West Steakhouse",
              "Southern Comfort Café",
              "Big Apple Bistro",
              "New England Eatery",
              "Cowboy Cookout",
              "Midwest Munchies",
              "Rocky Mountain Grub",
              "Hollywood Hotdogs",
              "Surf and Turf Tavern"
            ],
            "Indiano"=> [
              "Spice of India",
              "Taste of Mumbai",
              "Curry House Delights",
              "Bollywood Bites",
              "Raj Mahal Cuisine",
              "Tandoori Treasures",
              "Chai and Chaat",
              "Delhi Delicacies",
              "Punjab Palace",
              "Kerala Kitchen",
              "Garam Masala Grill",
              "Samosa Street",
              "Mughal Majesty",
              "Naan Nirvana",
              "Saffron Spice House",
              "Vindaloo Voyage",
              "The Tandoor Table",
              "Masala Mania",
              "Bombay Bistro",
              "Chutney Corner"
            ],
            "Mediterranea"=> [
              "Mediterraneo Delight",
              "Sunset Taverna",
              "Olive Grove Kitchen",
              "Aegean Breeze",
              "Casa del Mar",
              "Greek Gastronomy",
              "Santorini Sunset",
              "Seafood Odyssey",
              "Cretan Cuisine",
              "Amalfi Al Fresco",
              "Sicilian Serenade",
              "Capri Cuisine",
              "Tuscan Trattoria",
              "Positano Plates",
              "Sardinian Supper",
              "Mediterranean Magic",
              "Corsican Charm",
              "Provence Panache",
              "Riviera Retreat",
              "Cyprus Cafeteria"
            ],
            "Mediorientale"=> [
              "Arabian Nights",
              "Sultan's Delights",
              "Oasis Grill",
              "Desert Spice Palace",
              "Bazaar Bites",
              "Taj Mahal Tastes",
              "Persian Palace",
              "Casablanca Café",
              "Jordanian Journeys",
              "Istanbul Delights",
              "Lebanese Lighthouse",
              "Marrakech Marketplace",
              "Turkish Treasures",
              "Damascus Dining",
              "Dubai Delicatessen",
              "Kebab Kingdom",
              "Oman Oasis",
              "Qatar Quarters",
              "Bahrain Bistro",
              "Kuwaiti Kitchen"
            ],
          "Vietnamita"=>[
            "Pho Vietnam",
            "Saigon Street Eats",
            "Hanoi Kitchen",
            "Lotus Blossom Bistro",
            "Mekong River Café",
            "Ho Chi Minh Noodle House",
            "Golden Rice Bowl",
            "Vietnam Spice Delight",
            "Banh Mi Express",
            "Hue Flavor Haven",
            "Pho King Restaurant",
            "Red Lantern Vietnamese",
            "Little Saigon Grill",
            "Green Papaya Fusion",
            "Vietnam Star Cuisine",
            "Orchid Vietnamese Kitchen",
            "Bamboo Shoots Bistro",
            "Saigon Delicacies",
            "Rice Paper Rolls & More",
            "Nha Trang Noodles"
          ]];
          
          $userIds= User::all()->pluck('id');
          $types = Type::all()->pluck('id');
          
          foreach($restaurantsNames as $restaurantsName => $restaurantNamesArray){

            foreach($restaurantNamesArray as $restaurantName){
            
            $typeArrayRandom = $faker->randomElements($types,$faker->numberBetween(1, 3));
            $randomUser= $faker->randomElement($userIds);
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id=$randomUser;
            $newRestaurant->name = $restaurantName;
            $newRestaurant->address = $fakerIt->streetAddress();
            $newRestaurant->city = $fakerAddress->state();
            $newRestaurant->save();
            $newRestaurant->types()->sync($typeArrayRandom);
            $newRestaurant->save();
        }
    }
        }
    }
