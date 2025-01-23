<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
#[Layout('layouts.guest')]

class Login extends Component
{
    public $errorMessage = null;

    public LoginForm $form;

    public function login(){
        $this->form->login();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
