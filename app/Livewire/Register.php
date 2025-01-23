<?php

namespace App\Livewire;

use App\Livewire\Forms\RegisterForm;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Register')]
#[Layout('layouts.guest')]

class Register extends Component
{
    public RegisterForm $form;

    public function register(){
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.register');
    }
}
