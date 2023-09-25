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

        
        $data['status'] = $request->input('status');
        $data['restaurant_id'] = $request->input('restaurant_id');
        $newOrder = Order::create($data);
        $dishesIds = $request->dishes;
        $newOrder->save();
        $newOrder->dishes()->sync($dishesIds);
    }
    public function destroy($userId, $restaurantId, $orderId){
        $order = Order::findOrFail($orderId);
        if (!$order) {
            return redirect()->back()->with('error', 'Ordine non trovato.');
        }
        $order->dishes()->detach();
        $order->delete();
        return redirect()->back()->with('success', 'Ordine eliminato con successo.');
    }
}
