<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class NoteEdit extends Component
{
    public $note;
    public $noteText;
    public $company;
    public $companies;

    public function mount(){
        $this->noteText = $this->note->note;
        $this->company = $this->note->company_id;
        $this->companies = Company::all();
    }

    public function render()
    {
        return view('livewire.note-edit');
    }

    public function submit(){
        $this->note->note = $this->noteText;
        $this->note->company_id = $this->company;
        $this->note->save();
        session()->flash('message', "De note is succesvol gewijzigd!");
    }
}
