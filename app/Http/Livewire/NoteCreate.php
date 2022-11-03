<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteCreate extends Component
{
    public $note;
    public $company;
    public $companies;

    public function submit(){
        $note = new Note;
        $note->note = $this->note;
        $note->date = Carbon::now();
        $note->company_id = $this->company;
        $note->author_id = Auth::user()->id;
        $note->save();
        session()->flash('message', "De note is succesvol aangemaakt!");
        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        $this->companies = Company::all();
        return view('livewire.note-create');
    }
}
