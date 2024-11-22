<nav class="navbar navbar-expand-lg center-nav transparent navbar-light ">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="./">
                <img src="{{asset('assets/img/logo.png')}}" height="70px" width="150px" srcset="{{asset('assets/img/logo.png')}} 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas-nav ">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="./"><img src="{{asset('assets/img/logo.png')}}" height="70px" width="150px"
                        srcset="{{asset('assets/img/logo.png')}} 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                    aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
                <?php
                // Get the current file name
                $current_page = basename($_SERVER['REQUEST_URI']);
                ?>
                <li class="nav-item"><a class="nav-link <?php echo ($current_page == '/' || $current_page == 'pak' || $current_page == '') ? 'active' : ''; ?>" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle <?php echo ($current_page == 'restaurants' || $current_page == 'delivery' || $current_page == 'pickup') ? 'active' : ''; ?>" href="#!">Restaurants</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item <?php echo ($current_page == 'restaurants') ? 'active' : ''; ?>" href="{{route('restaurants')}}">
                                All Restaurants</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item <?php echo ($current_page == 'delivery') ? 'active' : ''; ?>" href="{{route('restaurant.delivery')}}">
                                Delivery</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item <?php echo ($current_page == 'pickup') ? 'active' : ''; ?>" href="{{route('restaurant.pickup')}}">
                                Pickup</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Partner With
                        Us</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="./go-partner">
                                Go Partner</a>
                        </li>
                        <li class="nav-item"><a class="dropdown-item" href="./go-driver">
                                Go Driver</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item "><a class="nav-link" href="./gomt">GOMT</a>
                </li>
                <!-- <li class="nav-item "><a class="mt-2 btn btn-soft-red rounded-pill"
                        href="https://meatyverse.gofeast.io/">MeatyVerse</a>
                </li> -->
                <li class="nav-item "><a class="nav-link" href="./blog">Blogs</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" href="#!">Help</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-item" href="./faqs">FAQs</a>
                        </li>


                        <li class="nav-item"><a class="dropdown-item" href="./contact-us">Contact
                                Us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./about-us">About Us</a>
                </li>
            </ul>
        </div>

        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                <li class="nav-item d-none d-md-block">
                    <a href="https://orders.gofeast.io" target="_blank"
                        class="btn btn-sm btn-primary rounded-pill">Order Now!</a>
                </li>
                <li class="nav-item d-lg-none">
                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                            data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
            </ul>

        </div>

    </div>
    <!-- /.container -->
</nav>