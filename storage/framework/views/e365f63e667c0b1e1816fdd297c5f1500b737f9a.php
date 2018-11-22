    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span data-feather="users"></span>
                  Felhasználók
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="/users">
                    <span data-feather="users"></span>
                    &nbsp; Felhasználók listázása
                    </a>
                    
                    <a class="dropdown-item" href="/users/create">
                    <span data-feather="user-plus"></span>
                    &nbsp; Felhasználó létrehozása
                    </a>
                  
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/users/delete" disabled>
                    <span data-feather="user-minus"></span>&nbsp; Felhasználó törlése
                    </a> <!-- delete még nincs -->
                  </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span data-feather="users"></span>
                  Vevők
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="/customers">
                    <span data-feather="users"></span>
                    &nbsp; Vevők listázása
                    </a>
                    
                    <a class="dropdown-item" href="/customers/create">
                    <span data-feather="user-plus"></span>
                    &nbsp; Vevő létrehozása
                    </a>
                  
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/customers/delete">
                    <span data-feather="user-minus"></span>
                    &nbsp; Vevő törlése
                    </a> <!-- delete még nincs -->
                  </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span data-feather="shopping-cart"></span>
                  Szolgáltatások
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="/services">
                    <span data-feather=""></span>
                    &nbsp; Szolgáltatások listázása
                    </a>
                    
                    <a class="dropdown-item" href="/services/create">
                    <span data-feather=""></span>
                    &nbsp; Szolgáltatás létrehozása
                    </a>
                  
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/services/delete">
                    <span data-feather=""></span>
                    &nbsp; Szolgáltatás törlése
                    </a> <!-- delete még nincs -->
                  </div>
              </li>

            </ul>
          </div>
        </nav>