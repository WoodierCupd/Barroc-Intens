<x-head/>
<body class="bg-white">
    <x-header/>

    <x-hero/>

    <h1 class="text-5xl font-extrabold pl-10 my-6">Koffie machines:</h1>
    @include('livewire.search') 
    <x-footer/>
    @livewireScripts
    @livewireAssets 
</body>
