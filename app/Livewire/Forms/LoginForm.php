<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    #[Validate('required|email')]
    public $email;

    #[Validate('required|min:6')]
    public $password;

    public $errorMessage;

    public function login(){
        // $loginData = [
        //     'form' => $this->form
        // ];

        //debug the login data
        // dd($loginData);

        //try to perform authentication
        if(Auth::attempt($this->validate())){
            return redirect()->route('home');
        }else{
            $this->errorMessage = 'Wrong credentials, try again';
        }
    }
}
