<?php

namespace App\Http\Livewire;

use App\Models\User;
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
    public $users;
    public $user;


    public function mount(){
        $this->users = User::all();
        $this->user = $this->company->contact_id;
        $this->name = $this->company->name;
        $this->phone = $this->company->phone;
        $this->street = $this->company->street;
        $this->house_number = $this->company->house_number;
        $this->city = $this->company->city;
        $this->country_code = $this->company->country_code;
        $this->bkr_checked = $this->company->bkr_checked;
    }

    public function submit(){
        $this->company->name = $this->name;
        $this->company->phone = $this->phone;
        $this->company->street = $this->street;
        $this->company->house_number = $this->house_number;
        $this->company->city = $this->city;
        $this->company->country_code = $this->country_code;
        $this->user = $this->company->contact_id;
        $this->company->contact_id = $this->user;
        if ($this->bkr_checked === true){
            $this->company->bkr_checked = date('y-m-d h:i:s');
        } elseif ($this->bkr_checked === false){
            $this->company->bkr_checked = null;
        }

        $this->company->save();

        session()->flash('message', 'Company successfully updated.');
    }

    public function render()
    {
        return view('livewire.company-edit');
    }
}
