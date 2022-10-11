<div class="sticky top-0 z-50 bg-barroc_yellow">
    @if (Route::has('login'))
        <div class="relative flex flex-row px-4 py-2">
            <div class="flex justify-start basis-1/6">
                <a class="" href="{{route('home')}}"><img class="w-20" src="{{ asset('img/Logo6_groot.png') }}" alt="Barroc intens logo"></a>
            </div>
            <div class="flex justify-center items-center basis-2/3">
                <a href="#" class="text-lg px-2 text-gray-700 dark:text-gray-500 underline">Link 1</a>
                <a href="#" class="text-lg px-2 text-gray-700 dark:text-gray-500 underline">Link 2</a>
                <a href="#" class="text-lg px-2 text-gray-700 dark:text-gray-500 underline">Link 3</a>
            </div>
            <div class="flex justify-end items-center basis-1/6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    @endif
</div>
