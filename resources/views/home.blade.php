<x-head/>
<body class="bg-white">
<x-header/>

<x-hero/>
<main>
    @include('components.carousel', ['items' => $machines])
</main>
<x-footer/>
@livewireScripts
</body>
