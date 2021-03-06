<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8"/>
    <link href="//fonts.googleapis.com" rel="preconnect" crossorigin>
    <title>{{ $title ?? config('app.name', 'Triangle Technologies Ltd') }}</title>
    <!-- META TAGS -->
    <meta name="description" content="{{ \App\Models\Setting::first()->meta_description }}">
    <meta name="keywords" content="{{ \App\Models\Setting::first()->meta_keywords }}">
    <meta name="author" content="Fahim Anzam Dip">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#c7ecff">

    <!--  SHARE META TAGS -->
    <meta property="og:title" content="{{ \App\Models\Setting::first()->meta_title }}">
    <meta property="og:description" content="{{ \App\Models\Setting::first()->meta_description }}">
    <meta property="og:image" content="{{ asset('frontend/images/og_image.jpg') }}">
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:url" content="https://triangeltech.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="{{ \App\Models\Setting::first()->meta_title }}">
    <meta name="twitter:image:alt" content="Triangle Technologies Ltd">

    <!--website-favicon-->
    <link href="{{ asset('frontend') }}/images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/plugin.min.css" rel="stylesheet" async>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" async>
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- template-style-->
    @notifyCss
    <link href="{{ asset('frontend') }}/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.min.css" rel="stylesheet">
    @yield('page-styles')
</head>

<body>
<!--Start Preloader -->
<div class="onloadpage" id="page_loader">
    <div class="pre-content">
        <div class="logo-pre"><img src="{{ asset('frontend') }}/images/ttl-logo.png" alt="Logo" class="img-fluid"/></div>
    </div>
</div>
<!--End Preloader -->

<!--Start Header -->
@include('frontend.includes.header')
<!--End Header -->

@yield('page-content')

<!--Start Footer-->
@include('frontend.includes.footer')
<!--End Footer-->

@if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
<!--Cart-->
<div id="cart" class="d-sm-flex d-none justify-content-center align-items-center">
    <div class="cart-icon">
        <span class="badge badge-danger">{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</span>
        <a href="{{ route('cart.page') }}">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>
@endif

<!--Laravel Notify-->
<x:notify-messages />

<!--scroll to top-->
<a id="scrollUp" href="#top" tabindex="-1"></a>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="116091306463317"
     theme_color="#ff7e29"
     logged_in_greeting="Hlw Greetings from Triangle Technologies Ltd. How Can we help you today?"
     logged_out_greeting="Hlw Greetings from Triangle Technologies Ltd. How Can we help you today?">
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend') }}/js/plugin.min.js"></script>
<script src="{{ asset('frontend') }}/js/preloader.js"></script>
<!--common script file-->
@notifyJs
<script src="{{ asset('frontend') }}/js/main.min.js"></script>
@yield('page-scripts')
</body>

</html>
