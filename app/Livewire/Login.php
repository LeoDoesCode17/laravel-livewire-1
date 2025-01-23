<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]

class Login extends Component
{
    public $errorMessage = null;
    public $successMessage = null;

    public LoginForm $form;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    public function login(){
        
        //reset the state
        // $this->errorMessage = $this->successMessage = null;
        $this->reset(['errorMessage', 'successMessage']);

        //validate input
        $this->validate();

        // $loginData = [
        //     'form' => $this->form
        // ];

        //debug the login data
        // dd($loginData);

        //try to perform authentication
        if(Auth::attempt([
            'email' => $this->form->email,
            'password' => $this->form->password
        ])){
            $this->successMessage = 'Success';
            return redirect()->route('home');
        }else{
            $this->errorMessage = 'Wrong credentials, try again';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
