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
            'total_price' => ['required', 'decimal:2'],
            'customer_name' => ['required', 'string'],
            'customer_address' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ]);
        $data['status'] = 0;
        $data['restaurant_id'] = $restaurant->id;
        $newOrder = Order::create($data);
        $dishes = $request->dishes;
        $dishesIds = Dish::whereIn('name', $dishes)->pluck('id')->toArray();
        $newOrder->save();
        $newOrder->dishes()->sync($dishesIds);
    }
    public function destroy($userId, $restaurantId, $orderId){
        $order = Order::findOrFail($orderId);


        $order->delete();

    }
}
