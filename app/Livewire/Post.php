<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

// the reason search is working because i add the where clause and update search

#[Title('Posts')]
class Post extends Component
{
    use WithPagination;

    public $search = '';

    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }
    }

    public function render()
    {
        // dd($posts); 
        return view('livewire.post', [
            'posts' => ModelsPost::where('title', 'like', '%'.$this->search.'%')->paginate(5)
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
