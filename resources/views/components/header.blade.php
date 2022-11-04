<div class="sticky top-0 z-50 bg-mettalic-yellow">
    @if (Route::has('login'))
        <div class="relative flex flex-row px-4 py-2">
            <div class="flex justify-start basis-1/6">
                <a class="" href="{{route('home')}}"><img class="w-28" src="{{ asset('img/Logo6_groot.png') }}" alt="Barroc intens logo"></a>
            </div>
            <div class=" flex justify-center items-center basis-2/3">
                <a href="#" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Link 1</button> </a>
                <a href="#" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Link 2</button> </a>
                <a href="#" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Link 3</button> </a>
            </div>
            <div class="flex justify-end items-center basis-1/6">
                    <a href="{{route('contactform')}}" class="text-xl px-2">Contact</a>
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-xl px-2">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-xl">Log in</a>
                @endauth
            </div>
        </div>
    @endif
</div>
