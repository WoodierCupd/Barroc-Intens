<div>
    @if(count($invoices))
        <table class="table-auto mb-4 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">Id</th>
                <th scope="col" class="py-3 px-6">Datum</th>
                <th scope="col" class="py-3 px-6">Betaald</th>
                <th scope="col" class="py-3 px-6">Bedrag</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($invoices as $invoice)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$invoice->id}}</td>
                    <td scope="row" class="py-4 px-6">{{$invoice->date}}</td>
                    <td scope="row" class="py-4 px-6">{{($invoice->paid_at === null) ? 'Betaling in afwachting' : 'Betaald'}}</td>
                    <td scope="row" class="py-4 px-6">${{$invoice->amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>geen vacatures gevonden</p>
    @endif
</div>
