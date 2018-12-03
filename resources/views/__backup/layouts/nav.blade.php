    <nav class="navbar navbar-dark sticky-top bg-dark navbar-expand-md p-0 flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" img src="/uploads" href="{{ route('home') }}"></a>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Regisztráció</a></li>
                        @else
                            <li class="nav-item dropdown">
                                
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                {{ Auth::user()->user_firstname }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{route('users.show', auth()->id())}}">
                                        <span data-feather="user"></span>
                                        &nbsp; Profil
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span data-feather="log-out"></span>
                                        &nbsp; Kijelentkezés
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </nav>

