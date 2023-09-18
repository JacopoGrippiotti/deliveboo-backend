<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Order;

class OrdersController extends Controller
{
    public function index(Restaurant $restaurant){
        $orders = $restaurant->orders;

        return response()->json([
            'success' => 'true',
            'results' => $orders
        ]);
    }
    public function show(int $orderId){
        $order = Order::findOrFail($orderId);
        return response()->json([
            'success' => true,
            'results' => $order
        ]);
    }
    public function store(Request $request){
        $data = $request->validate([

        ]);
    }
    public function destroy(){

    }
}
