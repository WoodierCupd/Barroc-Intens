<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $name;
    public $username;

    public function render()
    {
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        return view('livewire.user-edit');
    }
}
