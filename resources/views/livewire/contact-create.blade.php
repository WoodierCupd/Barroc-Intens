<div>
    <iframe class="w-full" height="250"
            src="https://maps.google.com/maps?q=terheidenseweg%20350&t=k&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <div class="container">
        <div class="flex justify-center">
            <div class="contact">
                <h1 class="h1_contact">Contact ons!</h1>
                <form wire:submit.prevent="submit">
                    <div class="form-group">
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Naam:</label>
                        <input wire:model="name" type="text" id="name"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="Jan Willem">
                    </div>
                    <div class="form-group">
                        <label for="company_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Bedrijfsnaam:</label>
                        <input wire:model="companyName" type="text" id="company_name"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="Jan Willem BV">
                    </div>
                    <div class="form-group">
                        <label for="postal_code"
                               class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Postcode:</label>
                        <input wire:model="postalCode" type="text" id="postal_code"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="1234JW">
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Telefoonnummer:</label>
                        <input wire:model="phoneNumber" type="tel" id="phone_number"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="06 12345678">
                    </div>
                    <div class="form-group">
                        <label for="email" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Uw
                            e-mail:</label>
                        <input wire:model="email" type="email" id="email"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="janwillem@email.com">
                    </div>
                    <div class="form-group">
                        <label for="title"
                               class="block mb-2 text-sm font-medium text-black-900 dark:text-black-300">Titel:</label>
                        <input wire:model="titel" type="text" id="title"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                               placeholder="Huren van koffiemachine">
                    </div>
                    <div class="form-group">
                        <label for="message" class="block mb-2 text-sm font-medium text-black-900 dark:text-black-400">Schrijf <uw></uw> mail</label>
                        <textarea wire:model="mail" id="message"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder=""></textarea>
                        <button type="submit"
                                class="bg-barroc_yellow text-barroc_grey hover:text-barroc_yellow hover:bg-barroc_grey transition ease-in-out duration-150">Verstuur mail</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
