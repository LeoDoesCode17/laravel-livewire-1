<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Title('Create Post')]

class CreatePost extends Component
{
    //these properties will be binded to input using wire:model="title"
    //wire:model="body"
    public $title;
    public $body;

    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
    }

    //this method will be called in a form tag using wire:submit="save"
    public function save(){
        dd([
            'title' => $this->title,
            'body' => $this->body
        ]);
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
