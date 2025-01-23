<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

#[Title('Category Posts')]
class CategoryPosts extends Component
{

    use WithPagination;

    public $category;
    public $categoryId;
    public $search = '';

    public function mount(Category $category){
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $this->categoryId = $category->id;
        $this->category = $category->name;
    }

    public function render()
    {
        // dd($this->posts);
        $posts = Category::findOrFail($this->categoryId)->posts()->where(
            'title',
            'like',
            '%'.$this->search.'%'
        )->paginate(5);
        // dd($posts);
        return view('livewire.category-posts', [
            'posts' => $posts
        ]);
    }
}
