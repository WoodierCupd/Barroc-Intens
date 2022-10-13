<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">Creator</th>
            <th scope="col" class="py-3 px-6">Date</th>
            <th scope="col" class="py-3 px-6">Detail page</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($maintenance_appointments as $maintenance_appointment)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$maintenance_appointment->id}}</td>
                <td class="py-4 px-6">{{$maintenance_appointment->getCompany->name}}</td>
                <td class="py-4 px-6">{{$maintenance_appointment->date_added}}</td>
                <td class="py-4 px-6"><a href="{{route('maintenance_appointment', $maintenance_appointment->id)}}">Link</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users}}
</div>
