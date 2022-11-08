<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class InvoiceCreate extends Component
{
    public $companies;
    public $paid_at;

    public function mount(){
        $this->companies = Company::all();
    }

    public function submit(){
        dd('Ok');
    }

    public function render()
    {
        return view('livewire.invoice-create');
    }
}
