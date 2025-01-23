<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Title('Home')]

class Home extends Component
{
    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.home');
    }
}
