    <nav class="navbar navbar-dark sticky-top bg-dark navbar-expand-md p-0 flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
     <!-- <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>-->

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/<?php echo e(Auth::user()->user_profile_img); ?>" style="width:32px; height:32px; position:absolute; top:4px; left:10px; border-radius:50%">
                                <?php echo e(Auth::user()->user_firstname); ?> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="/profile">
                                        <span data-feather="user"></span>
                                    &nbsp; Profil
                                    </a>

                                    <a class="dropdown-item" href=#>
                                    <span data-feather="user"></span>
                                    &nbsp; Profil szerkesztése
                                    </a>


                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
    </nav>

