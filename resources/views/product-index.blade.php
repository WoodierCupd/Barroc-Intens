<x-head/>
<x-header/>
<body>
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
                        <a href="mailto:sales@barrocintens.nl?subject={{ str_replace(" ", "%20", $product->name) }}" class="product__btn">Vraag een offerte aan!</a>
                    @else
                        <p class="italic text-red-600">Je kan alleen producten huren als je een account aanvraagt en de BKR check haalt.</p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</body>
<x-footer/>
@livewireScripts
