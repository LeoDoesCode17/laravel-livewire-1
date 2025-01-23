<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;

class RegisterForm extends Form
{
    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    #[Validate('required|string|min:3|max:255')]
    public $name;

    #[Validate('required|string|min:6|max:255|unique:users,username')]
    public $username;

    public function store(){
        $this->validate();

        User::create($this->all());

        session()->flash('message', 'Registration Success');

        //reset all the fields
        $this->reset();
    }
}
