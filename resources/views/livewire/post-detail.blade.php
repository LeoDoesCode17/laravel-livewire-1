<div class="px-5 py-5">
    <div class="card w-50">
        <div class="card-body">
            <h5 class="card-title fs-4">{{ $post->title }}</h5>
            <a wire:navigate href="/authors/{{ $post->author->username }}" class="card-subtitle mb-2 text-body-secondary f-7 font-weight-normal text-decoration-none">{{ $post->author->name }}</a>
            <span>|</span>
            <a href="/categories/{{ $post->category->slug }}" class="card-subtitle mb-2 text-body-secondary f-7 font-weight-normal text-decoration-none">{{ $post->category->name }}</a>
            <p class="card-text py-2">{{ $post->body }}</p>
            <a wire:navigate href="{{ route('post') }}" class="text-decoration-none">&laquo; Back</a>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">Added {{ $post->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
