<div>
    <a wire:navigate class="{{ $active ? 'nav-link active' : 'nav-link' }}" aria-current="{{ $active ? 'page' : '' }}" href="{{route($routeName)}}">{{ $title }}</a>
</div>
