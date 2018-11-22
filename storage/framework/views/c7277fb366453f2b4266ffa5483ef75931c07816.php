    <nav class="navbar navbar-dark sticky-top bg-dark navbar-expand-md p-0 flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>

            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Bejelntkezés</a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Regisztráció</a></li>
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

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Kijelentkezés
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

