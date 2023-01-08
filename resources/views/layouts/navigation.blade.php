<style>
    .nav-link.active {
        border-bottom: 1px solid #0D6EFD;
    }
    .navbar#main-nav {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
</style>

<nav class="navbar navbar-expand-lg bg-light py-0" id="main-nav">
    <div class="container">
        <a class="navbar-brand py-3" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="visibility: visible;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <x-nav-link link="{{ route('home') }}" text="Home" :active="['home']" />
                <x-nav-link link="{{ route('users') }}" text="Users" :active="['users']" />
                <x-nav-link link="{{ route('wizard') }}" text="Wizard" :active="['wizard']" />
            </ul>
            <ul class="navbar-nav d-flex">
                @guest
                    <x-nav-link link="{{ route('login') }}" text="Login" :active="['login']" />
                    <x-nav-link link="{{ route('register') }}" text="Register" :active="['register']" />
                @else
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end rounded-3 p-2">
                            <li>
                                <a class="dropdown-item rounded-2" href="{{ route('profile.index') }}">
                                    <i class="bi bi-person-circle me-3"></i>
                                    Profile
                                </a>
                            </li>
                            @if(auth()->user()->isAdmin)
                                <li>
                                    <a class="dropdown-item rounded-2" href="{{ route('filament.pages.dashboard') }}">
                                        <i class="bi bi-speedometer2 me-3"></i>
                                        Dashboard
                                    </a>
                                </li>
                            @endif
                            <li><hr class="dropdown-divider" style="border-color: rgba(0,0,0,0.05)"></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li>
                                    <a class="dropdown-item rounded-2 text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="bi bi-box-arrow-left me-3"></i>
                                        Logout
                                    </a>
                                </li>
                            </form>
                            {{-- <li><a class="dropdown-item" href="#"></a></li> --}}
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
