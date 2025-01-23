<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid px-5">
    <a wire:navigate class="navbar-brand" href="{{route('home')}}">Livewire</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <livewire:nav-link title="Home" :active="request()->is('/')" routeName="home"/>
        </li>
        <li class="nav-item">
          <livewire:nav-link title="About" :active="request()->is('about')" routeName="about"/>
        </li>
        <li class="nav-item">
          <livewire:nav-link title="Post" :active="request()->is('post')" routeName="post"/>
        </li>
        <li class="nav-item">
          <livewire:nav-link title="Contact" :active="request()->is('contact')" routeName="contact"/>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a href="{{ route('profile') }}" class="dropdown-item">Your Profile</a></li>
              <li><button class="dropdown-item" wire:click="logout">Logout</button></li>
            </ul>
          </div> 
        </li>
      </ul>
    </div>
  </div>
</nav>

