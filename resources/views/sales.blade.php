<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-3xl">User Edit:</h1>
                        <a href="{{route('user-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create new user</button></a>
                    </div>
                    <livewire:users/>
                </div>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-3">
                    <h1 class="font-bold text-3xl">Note Edit:</h1>
                    <a href="{{route('note-create')}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create new note</button></a>
                </div>
                @livewire('notes')
            </div>
        </div>
    </div>
</x-app-layout>
