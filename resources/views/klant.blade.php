<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klant overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold text-xl">Gebruikers informatie</h1>
                    <p>Naam: <span class="font-bold">{{Auth::user()->name}}</span></p>
                    <p>Gebruikersnaam: <span class="font-bold">{{Auth::user()->username}}</span></p>
                    <p>Email: <span class="font-bold">{{Auth::user()->email}}</span></p>
                    @if(count(\App\Models\Company::where('contact_id', Auth::user()->id)->get()))
                        <h1 class="font-semibold pt-3 text-xl">Bedrijfs informatie</h1>
                        @php
                            $company = \App\Models\Company::where('contact_id', Auth::user()->id)->first();
                            echo('<p>Naam: <span class="font-bold">' . $company->name . '</span></p>');
                            echo('<p>Telefoon nummer: <span class="font-bold">' . $company->phone . '</span></p>');
                            echo('<p>Straat: <span class="font-bold">' . $company->street . '</span></p>');
                            echo('<p>Huis nummer: <span class="font-bold">' . $company->house_number . '</span></p>');
                            echo('<p>Stad: <span class="font-bold">' . $company->city . '</span></p>');
                            echo('<p>Land: <span class="font-bold">' . $company->country_code . '</span></p>');
                        @endphp
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
