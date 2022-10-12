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
    public $role;

    public function mount(){
        $this->roles = Role::all();
        $this->name = $this->user->name;
        $this->username = $this->user->username;
        $this->email = $this->user->email;
        $this->role = $this->user->role_id;
    }

    public function submit(){
        $this->user->name = $this->name;
        $this->user->username = $this->username;
        $this->user->email = $this->email;
        $this->user->role_id = $this->role;
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.user-edit');
    }
}
