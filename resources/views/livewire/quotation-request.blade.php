<div class="container">
    <section>
        <div class="product__name">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="product__grid">
            <div class="product__image">
                <img src="{{ $product->image_path }}" alt="Product image">
            </div>
            <div class="product__description">
                <p>{{ $product->description }}</p>
                @auth()
                    <button wire:click="request" class="block bg-mettalic-yellow max-w-fit font-bold px-5 py-2 rounded-sm mt-2 shadow-lg">Vraag een offerte aan</button>
                @else
                    <p class="italic text-red-600">Je kan alleen een offerte aanvragen als je een account aanvraagt en de BKR check haalt.</p>
                @endauth
            </div>
        </div>
    </div>
    @if (session()->has('message'))
        <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3 mt-3" role="alert">
            <p>{{ session('message') }}</p>
        </div>
    @endif
</div>
