@extends('frontend.layouts.front-layout')

@section('page-content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area bg-gradeint4">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner mt-4">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="{{ route('home.page') }}">Home</a></li>
                                    <li><a href="{{ route('cart.page') }}">Cart</a></li>
                                    <li><strong>Checkout</strong></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Checkout-->
    <section class="cart-section why-choos-lg pad-tb wow fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Thank You For Taking Our Service</span>
                        <h2 class="mb40">Checkout</h2>
                    </div>
                </div>
            </div>
            <!-- Form Start -->
{{--            <div class="row mb-5">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div id="accordion" class="accordion">--}}
{{--                        <div class="card-1" style="background-color: #f9f9ff;">--}}
{{--                            <div class="card-header" id="faq1">--}}
{{--                                <button class="btn btn-link btn-block text-left card-title" type="button"--}}
{{--                                        data-toggle="collapse" data-target="#collapse-a" aria-expanded="true"--}}
{{--                                        aria-controls="collapse-a">--}}
{{--                                    Have Coupon? Click Here To Enter.--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div id="collapse-a" class="card-body collapse mt-3" aria-labelledby="faq1"--}}
{{--                                 data-parent="#accordion">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-5">--}}
{{--                                        <form action="">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label for=""><strong>Coupon</strong> <span class="text-danger">*</span> </label>--}}
{{--                                                <input type="text" class="form-control" name="coupon" required value="" placeholder="Enter coupon code">--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <button type="submit" class="btn-main bg-btn3 lnk">Apply Coupon</button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <form action="{{ url('/pay') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        @include('admin.includes.alerts')
                        <h4 class="mb-4">Billing Address</h4>
                        <hr class="mb-4">
                        <div class="">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> First Name<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="first_name" required placeholder="Enter your first name" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Last Name<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="last_name" required placeholder="Enter your last name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Email<span class="text-danger">*</span></strong></label>
                                            <input type="email" class="form-control" name="email" required placeholder="Enter your email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Phone<span class="text-danger">*</span></strong></label>
                                            <input type="number" class="form-control" name="phone" required placeholder="Enter your phone number" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Company Name<span
                                                class="text-danger"></span></strong></label>
                                    <input type="text" class="form-control" name="company_name" placeholder="Enter your company name" value="{{ old('company_name') }}">
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Street Address<span
                                                class="text-danger">*</span></strong></label>
                                    <input type="text" class="form-control" name="address" required placeholder="Enter your street address" value="{{ old('address') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><strong> Town / City<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="city" required placeholder="Enter your city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><strong> Postcode / ZIP<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="number" class="form-control" name="zip_code" required placeholder="Enter your zip / postcode" value="{{ old('zip_code') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Country<span class="text-danger">*</span></strong></label>
                                    <input type="text" class="form-control" name="country" required placeholder="Enter your country" value="{{ old('country') }}">
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Additional Note (If Needed)<span class="text-danger"></span></strong></label>
                                    <textarea class="form-control" name="order_note" id="" rows="5" placeholder="Enter additonal note">{{ old('order_note') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <h4 class="mb-4">Your Order</h4>
                        <hr class="mb-4">
                        <div class="card-1" style="background-color: #f9f9ff;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-center">
                                        <tr style="border-bottom: 1px solid #dddddd !important;">
                                            <th style="padding-bottom: 25px;">Package</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                        <tr style="border-bottom: 1px solid #dddddd !important;">
                                            <td>{{ $item->name }} × <strong>{{ $item->qty }}</strong></td>
                                            <td>৳ {{ $item->price * $item->qty }} BDT</td>
                                        </tr>
                                        @endforeach

                                        <tr class="text-danger font-weight-bold">
                                            <th style="padding-top: 25px;">Sub Total:</th>
                                            <td style="padding-top: 25px;">৳ {{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal(0,'.',',') }} BDT</td>
                                        </tr>
                                        <tr class="text-danger font-weight-bold">
                                            <th>Total:</th>
                                            <td>৳ {{ \Gloudemans\Shoppingcart\Facades\Cart::total(0,'.',',') }} BDT</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr class="my-0">


                                <div class="mt-4 d-flex justify-content-center">
                                    <button type="submit" class="btn-main bg-btn3 lnk"><i class="fas fa-check mr-2"></i> Confirm Order</button>
                                </div>

                                <div class="mt-4 d-flex justify-content-center">
                                    <a target="_blank" href="https://www.sslcommerz.com/" title="SSLCommerz" alt="SSLCommerz"><img style="width:100%;height:auto;" src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-01.png" /></a>
                                </div>

                            </div>
                        </div>

                        @include('frontend.partials.manual-payment')
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </section>
    <!--End Checkout-->
@endsection

@section('page-scripts')
    <script>
        $('#bankTransfer').click(function () {
            document.getElementById('bankTransferForm').style.display = 'block';
            document.getElementById('bkashForm').style.display = 'none';
            document.getElementById('rocketForm').style.display = 'none';
        });
        $('#bkash').click(function () {
            document.getElementById('bkashForm').style.display = 'block';
            document.getElementById('rocketForm').style.display = 'none';
            document.getElementById('bankTransferForm').style.display = 'none';
        });
        $('#rocket').click(function () {
            document.getElementById('rocketForm').style.display = 'block';
            document.getElementById('bkashForm').style.display = 'none';
            document.getElementById('bankTransferForm').style.display = 'none';
        });
    </script>
@endsection
