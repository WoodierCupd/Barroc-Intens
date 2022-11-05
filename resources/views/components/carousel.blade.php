<div class="container">
    <section class="splide" aria-labelledby="carousel-heading">
        <div class="splide__slider">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($machines as $machine)
                        <li class="splide__slide">
                            <a href="{{route('product-index', $machine->id)}}">
                                <img src="{{$machine->image_path}}" alt="{{$machine->name}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/themes/splide-default.min.css">
<script>
    new Splide( '.splide', {
        type    : 'loop',
        autoplay: 'pause',
        perPage : 3
    }).mount();
</script>
