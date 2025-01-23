<div>
    <h1>{{ $title }}</h1>
    <h1>{{ $count }}</h1>

    @if($open)
        <h1 x-show="open">You got me!!!</h1>
    @endif
 
    <button wire:click="decrement" class="">-</button>
 
    <button wire:click="increment">+</button>

    <button wire:click="toggleSomething">{{ $open ? "Hide" : "Show" }}</button>
</div>