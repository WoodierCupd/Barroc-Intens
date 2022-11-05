<x-head/>
<body class="bg-white">
    <x-header/>

    <x-hero/>

    @include('components.carousel', ['items' => $machines])

    <x-footer/>
    @livewireScripts
</body>
