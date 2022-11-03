<div>
    <div class="container mx-auto bg-white">
        <input type="text" wire:model="searchTerm"/>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $i)
                <div class="grid-item-coffee">
                    <a href="{{route('product-index', $i->id)}}">
                        <img src="{{$i->image_path}}" alt="machine">
                        <p class="text-red-600 text-center font-bold text-2xl">{{$i->name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
