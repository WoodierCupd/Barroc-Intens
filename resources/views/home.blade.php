<x-head/>
<x-header/>
<body class="bg-white">


<x-hero/>
<main>
    @include('components.about-us')
    @include('components.carousel', ['items' => $machines])

    @include('cookie-consent::index')
</main>

@livewireScripts
</body>
<x-footer/>
