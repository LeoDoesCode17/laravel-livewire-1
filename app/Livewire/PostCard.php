<?php

namespace App\Livewire;

use Livewire\Component;

class PostCard extends Component
{
    public $title;
    public $body;
    public $author;
    public $timeCreated;
    public $slug;
    public $category;

    public function render()
    {
        return view('livewire.post-card');
    }
}
