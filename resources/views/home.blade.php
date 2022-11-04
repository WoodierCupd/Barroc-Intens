<x-head/>
<body class="bg-white">
    <x-header/>

    <x-hero/>
    @livewire('search', ['products' => $machines])


    <x-footer/>
    @livewireScripts
</body>
