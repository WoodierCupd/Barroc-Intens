<x-head/>
<x-header/>
<body class="bg-white">


<x-hero/>
<main>
    @include('cookie-consent::index')
    @include('components.carousel', ['items' => $machines])
</main>

@livewireScripts
</body>
<x-footer/>
