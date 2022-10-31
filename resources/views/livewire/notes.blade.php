<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">Date</th>
            <th scope="col" class="py-3 px-6">Company name</th>
            <th scope="col" class="py-3 px-6">Author name</th>
            <th scope="col" class="py-3 px-6">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($notes as $note)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$note->id}}</td>
                <td class="py-4 px-6">{{$note->date}}</td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">{{route('note', $note->id)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$notes}}
</div>
