<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Register')]

class Register extends Component
{
    public RegisterForm $form;

    public function mount(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    public function register(){
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.register');
    }
}
