<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
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
        $this->role = 2;
    }

    public function submit(){
        $this->user = new User;
        $this->user->name = $this->name;
        $this->user->username = $this->username;
        $this->user->email = $this->email;
        $this->user->role_id = $this->role;
        $this->user->password = Hash::make($this->password);

        $this->user->save();

        session()->flash('message', 'User successfully updated.');
    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
