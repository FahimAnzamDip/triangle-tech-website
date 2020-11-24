<header class="nav-bg-w main-header navfix fixed-top menu-white header-pr">
    <div class="container">
        <div class="menu-header">
            <div class="">
                <a class="nav-brand" href="{{ route('home.page') }}">
                    <img class="my-2" width="130" src="{{ asset('frontend') }}/images/ttl-logo.png" alt="Logo">
                </a>
            </div>
            <div class="custom-nav" role="navigation">
                <ul class="nav-list">
                    <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('home.page') }}" class="menu-links">Home</a>
                    </li>
                    <li class="{{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ route('about.page') }}" class="menu-links">About</a>
                    </li>
                    <li class="{{ request()->is('all-services') ? 'active' : '' }}">
                        <a href="{{ route('all.services.page') }}" class="menu-links">Services</a>
                    </li>
                    <li class="{{ request()->is('web-development-prices-in-bangladesh') ? 'active' : '' }}">
                        <a href="{{ route('prices.page') }}" class="menu-links">Development Prices</a>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact.page') }}" class="menu-links">Contact</a>
                    </li>
                    @auth
                        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}" class="menu-links text-danger">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
            <div class="mobile-menu2 mt-2">
                <ul class="mob-nav2">
                    <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                </ul>
            </div>
        </div>
        <!--Mobile Menu-->
        <nav id="main-nav">
            <ul class="first-nav">
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('home.page') }}">Home</a>
                </li>
                <li class="{{ request()->is('about') ? 'active' : '' }}">
                    <a href="{{ route('about.page') }}">About</a>
                </li>
                <li class="{{ request()->is('all-services') ? 'active' : '' }}">
                    <a href="{{ route('all.services.page') }}">Services</a>
                </li>
                <li class="{{ request()->is('web-development-prices-in-bangladesh') ? 'active' : '' }}">
                    <a href="{{ route('prices.page') }}">Development Prices</a>
                </li>
                <li class="{{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact.page') }}">Contact</a>
                </li>
                @if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
                <li class="{{ request()->is('cart') ? 'active' : '' }}">
                    <a href="{{ route('cart.page')  }}"><i class="fas fa-shopping-cart mr-2"></i> Cart <span class="badge badge-danger">{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }}</span></a>
                </li>
                @endif
                @auth
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="text-danger">Dashboard</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
