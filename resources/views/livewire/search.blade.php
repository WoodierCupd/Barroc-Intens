<div>
    <div class="container mx-auto bg-white">
        <div class="search-top mt-24 mb-10">
            <h1 class="text-5xl font-extrabold">Producten</h1>
            <div>
                <select wire:model="type" name="type" id="type">
                    <option value="0">Alle</option>
                    <option value="1">Koffie machienes</option>
                    <option value="2">Koffie bonen</option>
                </select>
                <input class="searchbar rounded" placeholder="Zoek.." type="text" wire:model="searchTerm"/>
            </div>
        </div>

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
