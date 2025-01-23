<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Title('Post Detail')]
class PostDetail extends Component
{
    public $post;   

    public function mount(Post $post){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $this->post = $post;
    }
    public function render()
    {
        // dd($this->post);
        return view('livewire.post-detail');
    }
}
