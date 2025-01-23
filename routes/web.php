<?php

use App\Livewire\About;
use App\Livewire\AuthorPosts;
use App\Livewire\CategoryPosts;
use App\Livewire\Contact;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Post as PostView;
use App\Livewire\PostDetail;
use App\Livewire\Profile;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/counter', Counter::class)->name('counter');
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/post', PostView::class)->name('post');
    Route::get('/post/create-post', CreatePost::class)->name('create-post');
    Route::get('/posts/{post:slug}', PostDetail::class);
    Route::get('/authors/{user:username}', AuthorPosts::class);
    Route::get('/categories/{category:slug}', CategoryPosts::class);
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/profile', Profile::class)->name('profile');
});

Route::middleware('guest')->group(function (){
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

// Route::get('/counter', Counter::class)->name('counter');
// Route::get('/home', Home::class)->name('home');
// Route::get('/about', About::class)->name('about');
// Route::get('/post', PostView::class)->name('post');
// Route::get('/post/create-post', CreatePost::class)->name('create-post');
// Route::get('/posts/{post:slug}', PostDetail::class);
// Route::get('/authors/{user:username}', AuthorPosts::class);
// Route::get('/categories/{category:slug}', CategoryPosts::class);
// Route::get('/contact', Contact::class)->name('contact');
// Route::get('/profile', Profile::class)->name('profile');
// Route::get('/register', Register::class)->name('register');
// Route::get('/login', Login::class)->name('login');

