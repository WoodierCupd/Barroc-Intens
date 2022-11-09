<?php

namespace App\Http\Livewire;

use App\Models\CustomInvoice;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.invoices', [
            'invoices' => CustomInvoice::paginate(10),
        ]);
    }
}
