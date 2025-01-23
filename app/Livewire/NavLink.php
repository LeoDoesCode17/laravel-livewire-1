<?php

namespace App\Livewire;

use Livewire\Component;

class NavLink extends Component
{
    public $title;
    public $active;
    public $routeName;

    public function render()
    {
        return view('livewire.nav-link');
    }
}
