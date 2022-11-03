<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $product;

    public function mount(){
        $this->product = Product::all();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        dd('$searchTerm');
        $this->product = Product::where('name', 'LIKE', $searchTerm)->get();
        return view('livewire.search');
    }
}

