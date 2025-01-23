<div>
    <ul class="row list-unstyled">
        <li class="col-md-4 mb-4">
            <h3>Posts by {{ $category }}</h3> 
        </li>
       <!-- the reason this working because i add debounce.300ms -->
       <input 
            class="form-control mr-sm-2 mb-4" 
            type="search" 
            placeholder="Search Post" 
            aria-label="Search" 
            wire:model.live.debounce.300ms="search"
        >

        <!-- Pagination Links -->
        @if ($posts->count())
            <li class="col-md-12 mb-4">
                {{ $posts->links() }}
            </li>
        @endif

        <!-- Post Items -->
        @forelse ($posts as $post)
            <li class="col-md-4 mb-4" wire:key="post-{{ $post->id }}">
                <livewire:post-card
                    :title="$post->title"
                    :author="$post->author"
                    body="{{ Str::limit($post->body, 100) }}"
                    :timeCreated="$post->created_at->diffForHumans()"
                    :slug="$post->slug"
                    :category="$post->category"
                    wire:key="post-card-{{ $post->id }}"
                />
            </li>
        @empty
            <li class="col-md-12 mb-4">
                <p class="text-center">No posts found.</p>
            </li>
        @endforelse
    </ul>
</div>

