<?php

namespace App\Http\Livewire;

use App\Mail\ContactUs;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $companyName;
    public $postalCode;
    public $phoneNumber;
    public $titel;
    public $mail;

    public function submit(){
        Mail::to('CoffeeAddicted@gmail.nl')->send(new ContactUs());

        dd('It works');
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
