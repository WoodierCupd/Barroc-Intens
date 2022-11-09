<header>
    @if (Route::has('login'))
        <div class="navbar">
            <div class="navbar__logo">
                <a  href="{{route('home')}}"><img src="{{ asset('img/Logo6_groot.png') }}" alt="Barroc intens logo"></a>
            </div>
            <div class="navbar__items">
                <a href="{{ route('products') }}" class="navbar__btn">Producten</a>
                <a href="{{ route('contactform') }}" class="navbar__btn">Contact</a>
            </div>
            <div class="navbar__cta">
                @auth
                    <a href="{{ route('dashboard') }}" class="navbar__btn--cta">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="navbar__btn--cta">Log in</a>
                @endauth
            </div>
        </div>
    @endif
</header>
