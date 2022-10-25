<!DOCTYPE html>

<html>

<head>
    <title>Contact verzoek</title>
</head>

<body>

<div>
    <p>Naam: {{$data['name']}}</p>
    <p>Bedrijfs naam: {{$data['companyName']}}</p>
    <p>Telefoon nummer: {{$data['phoneNumber']}}</p>
    <p>PostCode: {{$data['postalCode']}}</p>
    <p>Email: {{$data['email']}}</p>
</div>
<div>
    <h1>{{$data['title']}}</h1>
    <p>{{$data['mail']}}</p>
</div>

</body>

</html>
