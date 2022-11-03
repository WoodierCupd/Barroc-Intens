<?php

namespace App\Http\Livewire;

use App\Mail\UserCreated;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class UserCreate extends Component
{
    public $data;
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
        $this->user->password = Hash::make(Str::random(8));
        $this->user->save();
        session()->flash('message', "Het account voor '$this->name' is succesvol aangemaakt!");
        return redirect()->to(route('dashboard'));

        Mail::to('support@barroc.com')->send(new UserCreated($this->email));


    }

    public function render()
    {
        return view('livewire.user-create');
    }
}
