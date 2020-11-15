<!DOCTYPE html>
<html lang="en" class="no-js">


<head>
    <meta charset="utf-8"/>
    <title>{{ $title ?? config('app.name', 'Triangle Technologies Ltd') }}</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency, Web Development Agency">
    <meta name="author" content="fahim-anzam">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#c7ecff">
    <!--website-favicon-->
    <link href="{{ asset('frontend') }}/images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/plugin.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
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

<!--Cart-->
<div id="cart" class="d-sm-flex d-none justify-content-center align-items-center">
    <div class="cart-icon">
        <span class="badge badge-danger">2</span>
        <a href="{{ route('cart.page') }}">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</div>

<!--Laravel Notify-->
<x:notify-messages />

<!--scroll to top-->
<a id="scrollUp" href="#top"></a>

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
