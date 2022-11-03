<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuotationRequest extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.quotation-request');
    }
}
