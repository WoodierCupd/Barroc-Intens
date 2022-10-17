<div class="container mx-auto bg-white">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($machines as $machine)
            <div class="grid-item-coffee">
                <a href="{{route('product-index', $machine->id)}}">
                    <img src="{{$machine->image_path}}" alt="machine">
                    <p class="text-red-600 text-center font-bold text-2xl">{{$machine->name}}</p>
                    <p class="text-center">Only €{{$machine->price}} Montly</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
