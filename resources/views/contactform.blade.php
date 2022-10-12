<x-head/>
<body class="bg-white">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<x-header/>
<div class="mapouter"><div class="gmap_canvas"><iframe width="1920" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=terheidenseweg%20350&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:250px;width:1920px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:1920px;}</style></div></div>


<div class="container">
    <h1 class="h1_contact">Contact ons!</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Naam:</label>
            <input type="text" id="name" name="visitor_name" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="Jan Willem" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="form-group">
            <label for="company_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Bedrijfsnaam:</label>
            <input type="text" id="company_name" name="visitor_company" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="Jan Willem BV" pattern=[A-Z\sa-z]{2,25} required>
        </div>
        <div class="form-group">
            <label for="postal_code" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Postcode:</label>
            <input type="text" id="postal_code" name="visitor_postalcode" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="1234JW" pattern=[A-Z\sa-z]{2,7} required>
        </div>
        <div class="form-group">
            <label for="phone_number" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Telefoonnummer:</label>
            <input type="tel" id="phone_number" name="visitor_phonenumber" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="06 12345678" pattern=[0-9]{3}-[0-9]{3}-[0-9]{4} required>
        </div>
        <div class="form-group">
            <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Uw e-mail:</label>
            <input type="email" id="email" name="visitor_email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="janwillem@email.com" required>
        </div>
        <div class="form-group">
            <label for="title" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Titel:</label>
            <input type="text" id="title" name="visitor_title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"placeholder="Huren van koffiemachine" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="form-group">
            <label for="message" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">Schrijf uw mail</label>
            <textarea id="message" name="visitor_message" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500"placeholder="" required></textarea>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Verstuur mail</button>

        </div>

    </form>
</div>
        </form>
    </div>


<x-footer/>
@livewireScripts
</body>

