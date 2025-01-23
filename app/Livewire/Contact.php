<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

#[Title('Contact')]
class Contact extends Component
{
    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        return view('livewire.contact');
    }
}
