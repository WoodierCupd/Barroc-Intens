<!DOCTYPE html>

<html>

<head>
    <title>Contact</title>
    <style>
        body{
            margin: 0 auto;
            width: 80%;
        }
        table, td, th {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

<div>
    <table>
        <tr>
            <th>Naam</th>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <th>Bedrijfs naam</th>
            <td>{{$data['companyName']}}</td>
        </tr>
        <tr>
            <th>Telefoon nummer</th>
            <td>{{$data['phoneNumber']}}</td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td>{{$data['postalCode']}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$data['email']}}</td>
        </tr>
    </table>
</div>
<div>
    <h1>{{$data['title']}}</h1>
    <p>{{$data['mail']}}</p>
</div>

</body>

</html>
