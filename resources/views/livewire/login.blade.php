<form wire:submit="login" class="d-flex flex-column gap-3">
    <div><h1>Livewire - Login</h1></div>
    <!-- this is for email -->
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" wire:model="form.email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        @error('form.email') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <!-- this is for password -->
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" wire:model="form.password">
        @error('form.password') <div style="color: red;">{{ $message }}</div> @enderror
    </div>
    <a href="{{ route('register') }}">Register here</a>
    <button type="submit" class="btn btn-primary">Login</button>
    
    @if ($errorMessage)
        <div style="color: red;">{{ $errorMessage }}</div>
    @endif
    @if ($successMessage)
        <div style="color: green;">{{ $successMessage }}</div>
    @endif
</form>

