<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompanyCreate extends Component
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

    public function submit(){
        $this->company = new Company;

        $this->company->name = $this->name;
        $this->company->phone = $this->phone;
        $this->company->street = $this->street;
        $this->company->house_number = $this->house_number;
        $this->company->city = $this->city;
        $this->company->country_code = $this->country_code;
        $this->company->contact_id = $this->contact_id;
        if ($this->bkr_checked === true){
            $this->company->bkr_checked = date('y-m-d h:i:s');
        } elseif ($this->bkr_checked === false){
            $this->company->bkr_checked = null;
        }
        $this->company->contact_id = 1;
        $this->company->save();

        return redirect()->to(route('admin'));
    }

    public function render()
    {
        return view('livewire.company-create');
    }
}
