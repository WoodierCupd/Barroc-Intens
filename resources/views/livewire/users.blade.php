<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">Id</th>
                <th scope="col" class="py-3 px-6">Username</th>
                <th scope="col" class="py-3 px-6">Email</th>
                <th scope="col" class="py-3 px-6">Role</th>
                <th scope="col" class="py-3 px-6">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->id}}</td>
                    <td class="py-4 px-6">{{$user->username}}</td>
                    <td class="py-4 px-6">{{$user->email}}</td>
                    <td class="py-4 px-6">{{$user->getRole->name}}</td>
                    <td class="py-4 px-6"><a href="{{route('user', $user->id)}}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users}}
</div>
