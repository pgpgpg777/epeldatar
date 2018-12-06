<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tanulás
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/tasks">Példatár</a>
                    <a class="dropdown-item" href="/supplies/create">Új segédanyag létrehozása</a>
                    <a class="dropdown-item" href="/tasks/create">Új kvíz létrehozása</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_groups" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Csoportok
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/groups">Csoportok</a>
                    <a class="dropdown-item" href="/groups/create">Új csoport létrehozása</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="/users">
                    Felhasználók
                </a>
                <!--div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/users">Felhasználók</a>
                    <a class="dropdown-item" href="/users/create">Új felhasználó létrehozása</a>
                </div-->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">Kilépés</a>
            
            <form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>
    </div>
</nav>
