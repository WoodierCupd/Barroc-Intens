<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Product_category;
use Livewire\Component;

class ProductCreate extends Component
{
    public $name;
    public $price;
    public $category = 1;
    public $stock;
    public $description;
    public $categories;
    public $product;

    public function mount(){
        $this->categories = Product_category::all();
    }

    public function submit(){
        $this->product = new Product;
        $this->product->name = $this->name;
        $this->product->price = $this->price;
        $this->product->product_category_id = $this->category;
        $this->product->description = $this->description;
        $this->product->stock = $this->stock;
        $this->product->save();

        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
