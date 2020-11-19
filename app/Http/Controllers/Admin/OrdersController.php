<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        $title = "TTL - Orders";
        $orders = Order::where('status', 'Processing')->latest()->get();

        return view('admin.pages.orders.index', [
            'title' => $title,
            'orders' => $orders
        ]);
    }

    public function show($id) {
        $title = "TTL - Order Details";
        $order = Order::find($id);

        return view('admin.pages.orders.show', [
            'title' => $title,
            'order' => $order
        ]);
    }

    public function pending() {
        $title = "TTL - Pending Orders";
        $orders = Order::where('status', 'Pending')->latest()->get();

        return view('admin.pages.orders.pending', [
            'title' => $title,
            'orders' => $orders
        ]);
    }

    public function failed() {
        $title = "TTL - Failed Orders";
        $orders = Order::where('status', 'Failed')->latest()->get();

        return view('admin.pages.orders.failed', [
            'title' => $title,
            'orders' => $orders
        ]);
    }

    public function canceled() {
        $title = "TTL - Canceled Orders";
        $orders = Order::where('status', 'Canceled')->latest()->get();

        return view('admin.pages.orders.canceled', [
            'title' => $title,
            'orders' => $orders
        ]);
    }

    public function completed() {
        $title = "TTL - Completed Orders";
        $orders = Order::where('status', 'Complete')->latest()->get();

        return view('admin.pages.orders.completed', [
            'title' => $title,
            'orders' => $orders
        ]);
    }

    public function makeComplete($id) {
        Order::find($id)->update([
            'status' => 'Complete'
        ]);

        notify()->info('Order Status Updated.','Completed!');

        return redirect()->back();
    }

    public function delete($id) {
        Order::find($id)->delete();

        notify()->warning('Order Deleted.','Deleted!');

        return redirect()->back();
    }

    public function cancel($id) {
        Order::find($id)->update([
            'status' => 'Canceled'
        ]);

        notify()->error('Order Canceled.','Canceled!');

        return redirect()->back();
    }
}
