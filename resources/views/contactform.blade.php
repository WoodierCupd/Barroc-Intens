<x-head/>
<body class="bg-white">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<x-header/>


    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="visitor_name" placeholder="Jan Willem" pattern=[A-Z\sa-z]{3,20} required>
            </div>
            <div class="form-group">
                <label for="company_name">Bedrijfsnaam:</label>
                <input type="text" id="company_name" name="visitor_company" placeholder="Jan Willem BV" pattern=[A-Z\sa-z]{2,25} required>
            </div>
            <div class="form-group">
                <label for="postal_code">Postcode:</label>
                <input type="text" id="postal_code" name="visitor_postalcode" placeholder="1234JW" pattern=[A-Z\sa-z]{2,7} required>
            </div>
            <div class="form-group">
                <label for="phone_number">Telefoonnummer:</label>
                <input type="tel" id="phone_number" name="visitor_phonenumber" placeholder="06 12345678" pattern=[0-9]{3}-[0-9]{3}-[0-9]{4} required>
            </div>
            <div class="form-group">
                <label for="email">Uw e-mail:</label>
                <input type="email" id="email" name="visitor_email" placeholder="janwillem@email.com" required>
            </div>
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" id="title" name="visitor_title" placeholder="Huren van koffiemachine" pattern=[A-Z\sa-z]{3,20} required>
            </div>
            <div class="form-group">
                <label for="message">Schrijf uw mail</label>
                <textarea id="message" name="visitor_message" placeholder="" required></textarea>
            </div>
            <button type="submit">Verstuur mail</button>
        </form>
    </div>


<x-footer/>
@livewireScripts
</body>

