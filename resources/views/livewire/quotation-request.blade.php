<div class="container">
    <div class="section">
        <div class="product__name">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="product__grid">
            <div class="product__image">
                <img src="{{ $product->image_path }}" alt="">
            </div>
            <div class="product__description">
                <p>{{ $product->description }}</p>
                @auth()
                    <button class="block bg-mettalic-yellow max-w-fit font-bold px-5 py-2 rounded-sm mt-2 shadow-lg">Vraag een offerte aan</button>
                @else
                    <p class="italic text-red-600">Je kan alleen producten huren als je een account aanvraagt en de BKR check haalt.</p>
                @endauth
            </div>
        </div>
    </div>
</div>
