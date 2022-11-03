<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuotationRequest extends Component
{
    public $product;

    public function request(){
        if (Auth::user()->role_id != 2){
            session()->flash('message', 'Alleen een klant kan een offerte aanvragen. Personeel niet!');
        } elseif (!Company::firstWhere('contact_id', 2)){
            session()->flash('message', 'Je moet eerst een company aanmaken. Neem contact op met support.');
        } elseif (!Company::firstWhere('contact_id', 2)->bkr_checked){
            session()->flash('message', 'Je moet eerst de BKR check halen. Neem contact op met support.');
        } else {
            dd('je kan het aanvragen');
        }
    }

    public function render()
    {
        return view('livewire.quotation-request');
    }
}
