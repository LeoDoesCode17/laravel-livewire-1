<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count  = 1;
    private $title = 'Counter Page';
    public $open = false;

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function toggleSomething(){
        $this->open = !$this->open;
    }
    public function render()
    {
        //livewire.counter means a file blade template name counter in folder livewire in views 
        return view('livewire.counter')->with([
            'title' => $this->title,
        ]);
    }
}
