<div class="relative flex items-top justify-center bg-yellow-500  py-4 sm:pt-0 ">
    @if (Route::has('login'))
        <div class="flex top-0 right-0 justify-between px-6 py-4">
            <div class="">
                <a href="{{route('home')}}"><img src="{{ asset('img/Logo6_groot.png') }}" alt="Barroc intens logo"></a>
            </div>
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
