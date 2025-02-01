<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Pelaporan Sampah</h1>
        </a>
        
        <!-- Navigation Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <!-- Public Routes -->
                <li><a href="{{ route('index') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('reports.index') }}" class="{{ request()->is('reports') ? 'active' : '' }}">Daftar Laporan</a></li>
                <li><a href="{{ route('peta.sampah') }}" class="{{ request()->is('peta-sampah') ? 'active' : '' }}">Peta Sampah</a></li>
                
                @auth
                    <!-- Authenticated User Routes -->
                    <li><a href="{{ route('reports.create') }}" class="{{ request()->is('reports/create') ? 'active' : '' }}">Buat Laporan</a></li>
                    <!-- <li><a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Akun Saya</a></li> -->
                    <li><a href="{{ route('profile.edit') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Profil</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="color: inherit; padding: 0; text-decoration: none;">Logout</button>
                        </form>
                    </li>
                @else
                    <!-- Guest Routes -->
                    <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a></li>
                    <li><a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">Register</a></li>
                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
