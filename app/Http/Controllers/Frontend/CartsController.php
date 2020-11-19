<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'id'  => 'required|numeric',
            'package_title' => 'required',
            'package_price' => 'required|numeric'
        ]);

        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            notify()->error('Package Is Already In Your Cart.', 'Error!');

            return redirect()->back();
        }

        Cart::add($request->id, $request->package_title, 1, $request->package_price)
                ->associate('App\Package');


        notify()->success('Package Added To Your Cart.', 'Success!');

        return redirect()->route('cart.page');
    }

    public function update(Request $request) {
        Cart::update($request->id, $request->quantity);

        notify()->info('Package Quantity Updated.', 'Updated!');

        return redirect()->route('cart.page');
    }

    public function delete($id) {
        Cart::remove($id);

        notify()->warning('Package Removed From Your Cart.', 'Removed!');

        return redirect()->route('prices.page');
    }
}
