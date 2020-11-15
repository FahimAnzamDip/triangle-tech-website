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
            <div class="row mb-5">
                <div class="col-md-12">
                    <div id="accordion" class="accordion">
                        <div class="card-1" style="background-color: #f9f9ff;">
                            <div class="card-header" id="faq1">
                                <button class="btn btn-link btn-block text-left card-title" type="button"
                                        data-toggle="collapse" data-target="#collapse-a" aria-expanded="true"
                                        aria-controls="collapse-a">
                                    Have Coupon? Click Here To Enter.
                                </button>
                            </div>
                            <div id="collapse-a" class="card-body collapse mt-3" aria-labelledby="faq1"
                                 data-parent="#accordion">
                                <div class="row">
                                    <div class="col-md-5">
                                        <form action="">
                                            <div class="form-group">
                                                <label for=""><strong>Coupon</strong> <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="coupon" required value="">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-main bg-btn3 lnk">Apply Coupon</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> First Name<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="first_name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Last Name<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="last_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Email<span class="text-danger">*</span></strong></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""><strong> Phone<span class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Company Name<span
                                                class="text-danger"></span></strong></label>
                                    <input type="text" class="form-control" name="company_name">
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Street Address<span
                                                class="text-danger">*</span></strong></label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><strong> Town / City<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for=""><strong> Postcode / ZIP<span
                                                        class="text-danger">*</span></strong></label>
                                            <input type="text" class="form-control" name="zip_code" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Country<span class="text-danger">*</span></strong></label>
                                    <input type="text" class="form-control" name="country" required>
                                </div>
                                <div class="form-group">
                                    <label for=""><strong> Additional Note (If Needed)<span class="text-danger"></span></strong></label>
                                    <textarea class="form-control" name="order_note" id="" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card-1" style="background-color: #f9f9ff;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-center">
                                        <tr>
                                            <th>Package</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        <tr>
                                            <td>Dynamic Website × <strong>1</strong></td>
                                            <td>15,000 BDT</td>
                                        </tr>
                                        <tr>
                                            <td>Newspaper Website × <strong>1</strong></td>
                                            <td>15,000 BDT</td>
                                        </tr>

                                        <tr>
                                            <th>Sub Total:</th>
                                            <td>30,000 BDT</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>30,000 BDT</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr class="my-0">
                                <div class="mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="Radios1"
                                               value="Bank Transfer" checked style="cursor: pointer;">
                                        <label class="form-check-label" for="Radios1" style="cursor: pointer;">
                                            <strong>Direct Bank Transfer</strong>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" name="payment_method" id="Radios2"
                                               value="Bkash" style="cursor: pointer;">
                                        <label class="form-check-label" for="Radios2" style="cursor: pointer;">
                                            <strong>Bkash</strong>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="radio" name="payment_method" id="Radios3"
                                               value="Rocket" style="cursor: pointer;">
                                        <label class="form-check-label" for="Radios3" style="cursor: pointer;">
                                            <strong>Rocket</strong>
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-4 d-flex justify-content-center">
                                    <button type="submit" class="btn-main bg-btn3 lnk">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </section>
    <!--End Checkout-->
@endsection
