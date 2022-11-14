<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">Maker</th>
            <th scope="col" class="py-3 px-6">Datum</th>
            <th scope="col" class="py-3 px-6">Type</th>
            <th scope="col" class="py-3 px-6">Verantwoordelijke</th>
            <th scope="col" class="py-3 px-6">Detail pagina</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($maintenance_appointments as $maintenance_appointment)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$maintenance_appointment->id}}</td>
                <td class="py-4 px-6">{{$maintenance_appointment->getCompany->name}}</td>
                <td class="py-4 px-6">{{$maintenance_appointment->date_added}}</td>
                @if($maintenance_appointment->type == 0)
                   <td class="py-4 px-6">Storingsaanvraag</td>
                @else
                    <td class="py-4 px-6">Routinematig bezoek</td>
                @endif
                <td class="py-4 px-6">{{$maintenance_appointment->responsible->name}}</td>
                <td class="py-4 px-6"><a href="{{route('maintenance_appointment', $maintenance_appointment->id)}}">Detail page</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$maintenance_appointments}}
</div>
