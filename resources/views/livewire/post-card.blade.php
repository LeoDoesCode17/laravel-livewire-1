<div class="card shadow">
    <div class="card-body">
      <h5 class="card-title fs-4">{{ $title }}</h5>
      <a wire:navigate href="/authors/{{ $author->username }}" class="card-subtitle mb-2 text-body-secondary f-7 font-weight-normal text-decoration-none">{{ $author->name }}</a>
      <span>|</span>
      <a wire:navigate href="/categories/{{ $category->slug }}" class="card-subtitle mb-2 text-body-secondary f-7 font-weight-normal text-decoration-none">{{ $category->name }}</a>
      <p class="card-text py-2">{{ $body }}</p>
      <a wire:navigate href="/posts/{{ $slug }}" class="text-decoration-none">Read more &raquo;</a>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Added {{ $timeCreated }}</small>
    </div>
</div>

