<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('index')}}#home">
        <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
        aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="page-scroll" href="{{route('index')}}#home">START</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="{{route('index')}}#about">O Wystawie</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="{{route('index')}}#event">Wystawa</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="{{route('index')}}#gallery">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="page-scroll" href="{{route('index')}}#contact">Kontakt</a>
            </li>
        </ul>
    </div>
    @if (Route::has('login'))
    @auth
    <div class="navbar-btn d-none d-sm-inline-block">
        <li class="dropdown nav-item">
            <a class="dropdown-toggle nav-link js-scroll-trigger main-btn" data-toggle="dropdown" role="button"
                aria-expanded="false"><i class="lni lni-user"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ url('/account') }}" class="nav-link"><i class="lni lni-cog"></i> Profil</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}" class="nav-link"><i class="lni lni-exit"></i> Wyloguj</a>
                </li>
            </ul>
        </li>
    </div>
    @else
    <div class="navbar-btn d-none d-sm-inline-block">
        <a class="main-btn" href="{{ route('login') }}">Zaloguj się</a>
    </div>
    @endauth
    @endif
</nav>
<!-- navbar -->
