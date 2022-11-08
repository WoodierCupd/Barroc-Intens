<?php

namespace App\Http\Livewire;

use App\Models\CustomInvoice;
use Livewire\Component;

class Invoices extends Component
{
    public function render()
    {
        return view('livewire.invoices', [
            'invoices' => CustomInvoice::paginate(10),
        ]);
    }
}
