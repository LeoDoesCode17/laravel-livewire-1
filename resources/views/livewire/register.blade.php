<form wire:submit="register" class="d-flex flex-column gap-3">
    <div><h1>Livewire - Register</h1></div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <!-- this is for name -->
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name" wire:model="form.name">
        @error('form.name') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <!-- this is for username -->
    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter your username" wire:model="form.username">
        @error('form.username') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <!-- this is for email -->
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" wire:model="form.email">
        <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        @error('form.email') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <!-- this is for password -->
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" wire:model="form.password">
        @error('form.password') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

