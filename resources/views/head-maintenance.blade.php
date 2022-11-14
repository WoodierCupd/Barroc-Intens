<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maintenance dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">Maintenance afspraken</h1>
                        <a href="{{route('maintenance-appointments-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create new appointment</button></a>
                    </div>
                    <livewire:maintenance-appointments/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-bold text-3xl">Maintenance kalender</h1>
                    <livewire:calendar/>
                    @stack('scripts')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
