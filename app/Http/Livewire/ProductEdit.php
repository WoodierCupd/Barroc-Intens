<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Product_category;
use Livewire\Component;

class ProductEdit extends Component
{
    public $name;
    public $price;
    public $category;
    public $description;
    public $categories;
    public $product;

    public function mount(){
        $this->categories = Product_category::all();
        $this->name = $this->product->name;
        $this->price = $this->product->price;
        $this->category = $this->product->category;
        $this->description = $this->product->description;
        $this->category = $this->product->product_category_id;
    }

    public function submit(){
        $this->product->name = $this->name;
        $this->product->price = $this->price;
        $this->product->product_category_id = $this->category;
        $this->product->description = $this->description;
        $this->product->save();
        session()->flash('message', 'Product successfully updated.');
    }

    public function delete(){
        $this->product->delete();
        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.product-edit');
    }
}
