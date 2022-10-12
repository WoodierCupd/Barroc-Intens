<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $roles;
    public $name;
    public $username;
    public $password;
    public $email;

    public function mount(){
        $this->roles = Role::all();
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}
