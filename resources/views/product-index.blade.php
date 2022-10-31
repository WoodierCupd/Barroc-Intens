<x-head/>
<x-header/>
<body>
    <div class="container">
        <div class="section">
            <div class="product__grid">
                <div class="product__title">
                    <h2>{{ $product->name }}</h2>
                </div>
                <div class="product__image">
                    <img src="{{ $product->image_path }}" alt="">
                </div>
                <div class="product__description">
                    <p>{{ $product->description }}</p>
                    <a href="{{route('contactform')}}" class="product__btn">Vraag een offerte aan!</a>
                </div>
            </div>
        </div>
    </div>
</body>
<x-footer/>
@livewireScripts
