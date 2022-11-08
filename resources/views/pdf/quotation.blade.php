<style>
    table {
        border-collapse: collapse;
        font-family: Tahoma, Geneva, sans-serif;
    }
    table td {
        padding: 15px;
    }
    table thead th {
        background-color: #54585d;
        color: #ffffff;
        font-weight: bold;
        font-size: 13px;
        border: 1px solid #54585d;
        padding: 15px;
    }
    table tbody td {
        color: #636363;
        border: 1px solid #dddfe1;
    }
    table thead tr {
        background-color: #f9fafb;
    }
    table thead tr:nth-child(odd) {
        background-color: #ffffff;
    }
</style>
<div>
    <h1>Offerte Baroc Intens</h1>
    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Naam</th>
            <th scope="col">Prijs (Maandelijks)</th>
            <th scope="col">Categorie</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->getCategory->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
