<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Order;
use App\Models\Dish;
use App\Models\User;

class OrdersController extends Controller
{
    public function index(int $userId, int $restaurantId){
        // $user = User::findOrFail($userId);
        $restaurant = Restaurant::findOrFail($restaurantId);
        $orders = $restaurant->orders;

        return response()->json([
            'success' => 'true',
            'results' => $orders
        ]);
    }

    public function show($userId, $restaurantId, int $orderId){
        $order = Order::findOrFail($orderId);
        $dishesOrder = $order->dishes;

        return response()->json([
            'success' => true,
            'results' => $dishesOrder
        ]);
    }

    public function store(Request $request){

        
        $data = $request->validate([
            'total_price' => ['required', 'numeric'],  
            'customer_name' => ['required', 'string'],
            'customer_address' => ['required', 'string'],
            'phone_number' => ['required', 'string'], 
        ]);
        
        $quantities = $request->quantities;
        $data['status'] = $request->input('status');
        $data['restaurant_id'] = $request->input('restaurant_id');
        $newOrder = Order::create($data);
        $dishesIds = $request->dishes;
        if (count($dishesIds) === count($quantities)) {
            $dishQuantityPairs = [];
            for ($i = 0; $i < count($dishesIds); $i++) {
                $dishId = $dishesIds[$i];
                $quantity = $quantities[$i];
                $dishQuantityPairs[$dishId] = ['quantity' => $quantity];
            }
            
            $newOrder->dishes()->sync($dishQuantityPairs);
        } 
       
        
    }
    public function destroy($userId, $restaurantId, $orderId){
        $order = Order::findOrFail($orderId);


        $order->delete();

    }
}
