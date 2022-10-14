<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompanyEdit extends Component
{
    public $company;
    public $name;
    public $phone;
    public $street;
    public $house_number;
    public $city;
    public $country_code;
    public $bkr_checked;
    public $contact_id;


    public function mount(){
        $this->name = $this->company->name;
        $this->phone = $this->company->phone;
        $this->street = $this->company->street;
        $this->house_number = $this->company->house_number;
        $this->city = $this->company->city;
        $this->country_code = $this->company->country_code;
        $this->bkr_checked = $this->company->bkr_checked;
        $this->contact_id = $this->company->contact_id;
    }

    public function submit(){
        dd('submit');
    }

    public function render()
    {
        return view('livewire.company-edit');
    }
}
