<nav class="navbar navbar-expand navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        @auth
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        @endauth

        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                @guest

                    @if (Route::has('register'))

                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
