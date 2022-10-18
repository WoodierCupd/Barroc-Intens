<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ContactCreate extends Component
{
    public $machines;

    public function mount(){
        $this->machines = Product::all()->where('product_category_id', '1');
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
