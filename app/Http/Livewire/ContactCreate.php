<?php

namespace App\Http\Livewire;

use App\Mail\ContactUs;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactCreate extends Component
{
    public $data;
    public $name;
    public $email;
    public $companyName;
    public $postalCode;
    public $phoneNumber;
    public $titel;
    public $mail;

    public function submit(){
        $this->data = [
          'name' => $this->name,
          'email' => $this->email,
          'companyName' => $this->companyName,
          'postalCode' => $this->postalCode,
          'phoneNumber' => $this->phoneNumber,
          'title' => $this->titel,
          'mail' => $this->mail,
        ];
        Mail::to('support@barroc.com')->send(new ContactUs($this->data));
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
