<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Carbon\Carbon;
use Livewire\Component;

class InvoiceEdit extends Component
{
    public $companies;
    public $paid_at;
    public $amount;
    public $invoice;

    public function mount(){
        $this->companies = Company::all();
        if ($this->invoice->paid_at) {
            $this->paid_at = 1;
        }
        $this->amount = $this->invoice->amount;
        $this->company = $this->invoice->company_id;
    }

    public function submit(){
        $this->invoice->company_id = $this->company;
        if ($this->paid_at != 0 && $this->invoice->paid_at === null){
            $this->invoice->paid_at = Carbon::now();
        } elseif ($this->paid_at != 1 && $this->invoice->paid_at !== null){
            $this->invoice->paid_at = null;
        }
        $this->invoice->amount = $this->amount;
        $this->invoice->save();
        session()->flash('message', "De factuur is succesvol aangepast!");
    }

    public function delete(){
        $this->invoice->delete();
        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.invoice-edit');
    }
}
