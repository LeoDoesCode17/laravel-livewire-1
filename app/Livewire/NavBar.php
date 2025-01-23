<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NavBar extends Component
{
    public function logout(){
        Auth::logout();
        // dd(Auth::user());
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
