<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class AuthorPosts extends Component
{
    use WithPagination;
    public $author;
    public $userId;
    public $search = '';
    
    public function mount(User $user){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $this->author = $user->name;
        $this->userId = $user->id;
    }

    public function render()
    {
        // dd($this->posts);
        $posts = User::findOrFail($this->userId)->posts()->where(
            'title',
            'like',
            '%'.$this->search.'%'
        )->paginate(5);
        // dd($posts);
        return view('livewire.author-posts', [
            'posts' => $posts
        ]);
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
