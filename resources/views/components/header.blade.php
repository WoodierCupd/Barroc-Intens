<div class="sticky top-0 z-50 bg-white" style="box-shadow: 0 -6px 10px 5px rgba(0,0,0,0.5);">
    @if (Route::has('login'))
        <div class="relative flex flex-row px-4 py-2">
            <div class="flex justify-start basis-1/6">
                <a  href="{{route('home')}}"><img class="w-28" src="{{ asset('img/Logo6_groot.png') }}" alt="Barroc intens logo"></a>
            </div>
            <div class="flex justify-center items-center basis-2/3">
                <a href="#" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Link 1</button> </a>
                <a href="{{ route('products') }}" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Producten</button> </a>
                <a href="#" class="text-lg px-2 text-white"><button class="bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Link 3</button> </a>
            </div>
            <div class="flex justify-end items-center basis-1/6">
                    <a href="{{ route('contactform') }}" class="text-xl px-2">Contact</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="text-xl px-2">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-xl">Log in</a>
                    <a href="{{ route('login') }}" class="text-lg px-2 text-white bg-black rounded py-2 px-2 hover:text-black hover:bg-yellow-500">Log in</a>
                @endauth
            </div>
        </div>
    @endif
</div>
