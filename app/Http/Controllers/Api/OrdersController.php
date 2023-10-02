<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Order;
use App\Models\Dish;
use App\Models\User;
use Carbon\Carbon;

class OrdersController extends Controller
{
    public function index(int $userId, int $restaurantId){
        // $user = User::findOrFail($userId);
        $restaurant = Restaurant::findOrFail($restaurantId);
        $orders = $restaurant->orders;


        $monthlyOrderCount = [];
        $monthlySales = [];

    foreach ($orders as $order) {
       $createdAt = Carbon::parse($order->created_at);
       $yearMonth = $createdAt->format('Y-m'); // Formato "AAAA-MM"

    if (!isset($monthlySales[$yearMonth])) {
        $monthlySales[$yearMonth] = 0;
    }

    $monthlySales[$yearMonth] += $order->total_price; // Sostituisci 'amount' con il campo corretto per l'ammontare dell'ordine
}

    foreach ($orders as $order) {
       $createdAt = Carbon::parse($order->created_at);
       $yearMonth = $createdAt->format('Y-m'); // Formato "AAAA-MM"

    if (!isset( $monthlyOrderCount[$yearMonth])) {
        $monthlyOrderCount[$yearMonth] = 0;
    }

    $monthlyOrderCount[$yearMonth]++; // Sostituisci 'amount' con il campo corretto per l'ammontare dell'ordine
}

        ksort($monthlyOrderCount);
        ksort($monthlySales);
        $orderedMonthlySales = array_values($monthlySales);
        $orderedMonthlyOrderCount = array_values($monthlyOrderCount);
        $annualSales = array_sum(array_values($monthlySales));

        return response()->json([
            'success' => 'true',
            'results' => $orders,
            'monthly_sales' =>$orderedMonthlySales,
            'monthly_order_count' =>  $orderedMonthlyOrderCount
        ]);
    }

    public function show($userId, $restaurantId, int $orderId){
        $order = Order::findOrFail($orderId);

        // Carica i piatti correlati all'ordine con la quantità dalla tabella ponte
        $dishesOrder = $order->dishes()->withPivot('quantity')->get();

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
        return response()->json([
            'success' => $newOrder,
        ]);

    }
    public function destroy($userId, $restaurantId, $orderId){
        $order = Order::findOrFail($orderId);


        $order->delete();

    }
}
