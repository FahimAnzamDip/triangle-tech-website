<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function processing() {
        $title = "TTL - Processing Orders";
        $orders = Order::where('status', 'Processing')->latest()->get();

        return view('admin.pages.orders.processing', [
            'title' => $title,
            'orders' => $orders
        ]);
    }
}
