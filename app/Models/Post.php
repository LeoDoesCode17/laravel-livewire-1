<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'author', 'slug', 'body', 'category'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }


    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
