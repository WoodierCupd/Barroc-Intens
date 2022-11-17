<div>
    <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-6">Id</th>
            <th scope="col" class="py-3 px-6">Name</th>
            <th scope="col" class="py-3 px-6">Price</th>
            <th scope="col" class="py-3 px-6">Stock</th>
            <th scope="col" class="py-3 px-6">Category</th>
            <th scope="col" class="py-3 px-6">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$product->id}}</td>
                <td class="py-4 px-6">{{$product->name}}</td>
                <td class="py-4 px-6">{{$product->price}}</td>
                @if($product->stock <= 5)
                    <td class="py-4 px-6 text-red-600">{{$product->stock}}</td>
                @elseif($product->stock <= 10)
                    <td class="py-4 px-6 text-orange-600">{{$product->stock}}</td>
                @else
                    <td class="py-4 px-6 text-green-600">{{$product->stock}}</td>
                @endif
                <td class="py-4 px-6">{{$product->getCategory->name}}</td>
                <td class="py-4 px-6"><a href="{{route('product', $product->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$products}}
</div>
