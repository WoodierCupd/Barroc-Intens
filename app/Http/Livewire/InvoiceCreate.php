<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\CustomInvoice;
use Carbon\Carbon;
use Livewire\Component;

class InvoiceCreate extends Component
{
    public $companies;
    public $paid_at;
    public $amount;
    public $company;

    public function mount(){
        $this->companies = Company::all();
    }

    public function submit(){
        $invoice = new CustomInvoice;
        $invoice->company_id = $this->company;
        ($this->paid_at == 1) ? $invoice->paid_at = Carbon::now() : $invoice->paid_at = null;
        $invoice->amount = $this->amount;
        $invoice->date = Carbon::now();
        $invoice->save();
        session()->flash('message', "De factuur is succesvol aangemaakt!");
        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.invoice-create');
    }
}
