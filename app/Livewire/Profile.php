<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


#[Title('Profile')]

class Profile extends Component
{
    public $name;
    public $username;
    public $email;
    public $password;

    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->username = $user->username;
        // dd($this->username);
        return view('livewire.profile');
    }
}
