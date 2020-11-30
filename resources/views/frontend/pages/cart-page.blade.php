@extends('frontend.layouts.front-layout')

@section('page-content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area bg-personal">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner mt-4">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="{{ route('home.page') }}">Home</a></li>
                                    <li><strong>Cart</strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Cart</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Cart-->
    <section class="cart-section why-choos-lg pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Thank You For Taking Our Service</span>
                        <h2 class="mb40">Shopping Cart</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Form Start -->
                    <form action="{{ route('carts.update') }}" method="POST">
                        @csrf
                        <!-- Table Content Start -->
                        <div class="table-content table-responsive mb-50">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-name">Package</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Sub Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($carts as $item)
                                <tr>
                                    <td class="product-name">
                                        <a href="#">{{ $item->name }}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">{{ $item->price }} BDT</span>
                                    </td>
                                    <td class="product-quantity">
                                        <input style="font-weight: bold;text-align: center;" type="number" value="{{ $item->qty }}" name="quantity" min="1"/>
                                    </td>
                                    <input type="hidden" name="id" value="{{ $item->rowId }}">
                                    <td class="product-subtotal">
                                        {{ $item->price * $item->qty }} BDT
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{ route('carts.delete', $item->rowId) }}"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-danger">No Packages In Cart</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Content Start -->
                        <div class="row mt-5">
                            <!-- Cart Button Start -->
                            <div class="col-md-8">
                                <div class="buttons-cart">
                                    <input type="submit" value="Update Cart" />
                                    <a href="{{ route('prices.page') }}">Continue Shopping</a>
                                </div>
                            </div>
                            <!-- Cart Button Start -->
                            <!-- Cart Totals Start -->
                            <div class="col-md-4">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <br/>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::subtotal()) }} BDT</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">{{ number_format(\Gloudemans\Shoppingcart\Facades\Cart::total()) }} BDT</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{ route('checkout.page') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart Totals End -->
                        </div>
                        <!-- Row End -->
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </section>
    <!--End Cart-->
@endsection
