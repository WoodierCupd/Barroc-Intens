<x-head/>
<x-header/>
<body class="bg-white">


<x-hero/>
<main>
    @include('components.carousel', ['items' => $machines])
</main>

@livewireScripts
</body>
<x-footer/>
