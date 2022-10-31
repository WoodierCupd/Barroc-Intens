<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Purchase dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="products">
                        <table>
                            <thead>
                            <tr>
                                <th>~</th>
                                <th>Product naam</th>
                                <th>Aantal</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product__checkbox"><input type="checkbox"></td>
                                <td class="product__title">Douwe egberts machine</td>
                                <td class="product__ammount">15</td>
                                <td class="product__options flex gap-0.5">
                                    <a href="/" class="">edit</a>
                                    <form action="POST">
                                        <input type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
