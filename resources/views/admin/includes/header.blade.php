<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li>
            <a href="{{ route('home.page') }}" class="nav-link nav-link-lg"><i class="fas fa-code mr-1"></i> <strong>View Website</strong></a>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <i class="fas fa-user mr-1"></i> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">

                <a href="#" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Account Settings
                </a>

                <div class="dropdown-divider"></div>

                <a id="logout" href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                    <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand d-flex justify-content-center">
            <a href="{{ route('home.page') }}">
                <img class="mt-2" style="width: 120px;" src="{{ asset('frontend/images/ttl-logo.png') }}" alt="site logo">
            </a>
        </div>
        <ul class="sidebar-menu mt-2">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }} border-bottom border-light border-top">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Contact</li>
            <li class="nav-item {{ request()->is('messages*') ? 'active' : '' }} border-bottom border-light border-top">
                <a href="{{ route('messages.index') }}" class="nav-link">
                    <i class="fas fa-envelope"></i><span>Messages <div class="badge badge-primary">{{ \App\Models\Message::where('read', 0)->count() }}</div></span>
                </a>
            </li>
        </ul>

    </aside>
</div>
