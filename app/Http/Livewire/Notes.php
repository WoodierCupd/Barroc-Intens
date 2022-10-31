<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Notes extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.notes' , [
            'notes' => Note::paginate(10),
        ]);
    }
}
