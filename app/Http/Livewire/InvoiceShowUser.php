<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\CustomInvoice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InvoiceShowUser extends Component
{
    public $invoices;

    public function mount(){
        $company = Company::all()->where('contact_id', Auth::user()->id)->first();
        if ($company !== null){
            $this->invoices = CustomInvoice::all()->where('company_id', $company->id);
        }
    }

    public function render()
    {
        return view('livewire.invoice-show-user');
    }
}
