<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">Phone</th>
            <th scope="col" class="py-3 px-6">Owner</th>
            <th scope="col" class="py-3 px-6">BKR Checked</th>
            <th scope="col" class="py-3 px-6">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($companies as $company)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$company->id}}</td>
                <td class="py-4 px-6">{{$company->name}}</td>
                <td class="py-4 px-6">{{$company->phone}}</td>
                <td class="py-4 px-6">{{$company->getUser->name}}</td>
                <td class="py-4 px-6">@if($company->bkr_checked === null) no @else yes @endif</td>
                <td class="py-4 px-6"><a href="{{route('company', $company->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$companies}}
</div>
