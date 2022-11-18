<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">Gebruikers</h1>
                        <a href="{{route('user-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Maak een nieuwe gebruiker</button></a>
                    </div>
                    <livewire:users/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">Bedrijven</h1>
                        <a href="{{route('company-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Maak een nieuw bedrijf</button></a>
                    </div>
                    <livewire:companies/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">Producten</h1>
                        <a href="{{route('product-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Maak een nieuw product</button></a>
                    </div>
                    <livewire:products/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">Afspraken</h1>
                        <a href="{{route('maintenance-appointments-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Maak een nieuwe afspraak</button></a>
                    </div>
                    <livewire:calendar/>
                    @stack('scripts')
                </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
