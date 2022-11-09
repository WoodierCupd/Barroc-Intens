<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $product;
    public $type = 0;

    public function mount(){
        $this->product = Product::all();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        if ($this->type != 0){
            $this->products = Product::where('name', 'LIKE', $searchTerm)->where('product_category_id', $this->type)->get();
        } else {
            $this->products = Product::where('name', 'LIKE', $searchTerm)->get();
        }
        return view('livewire.search');
    }
}

