<section class="splide container" aria-labelledby="carousel-heading" style="height: fit-content">
    <h1 class="carousel__title">Onze koffieapparaten!</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <script src="{{ asset("js/splide.js") }}"></script>
</section>

