<nav class="navbar navbar-expand-lg center-nav transparent navbar-light mb-2 px-0">
    <div class="container flex-lg-row flex-nowrap align-items-center border-bottom px-0">
        <div class="navbar-brand w-100">
            <a href="./">
                <img src="{{asset('assets/img/GoFeast Red 2.png')}}" height="70px" width="150px" srcset="{{asset('assets/img/GoFeast Red 2.png')}} 2x" alt="">
            </a>
        </div>
        <div class="navbar-collapse offcanvas-nav px-0 mx-0">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="./"><img src="{{asset('assets/img/GoFeast Red 2.png')}}" height="70px" width="150px"
                        srcset="{{asset('assets/img/GoFeast Red 2.png')}} 2x" alt=""></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                    aria-label="Close"></button>
            </div>
            <ul class="navbar-nav px-0 mx-0">
                <?php
                // Get the current file name
                $current_page = basename($_SERVER['REQUEST_URI']);
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/' || $current_page == 'pak' || $current_page == '') ? 'active' : ''; ?>" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page == 'restaurants' || $current_page == 'delivery' || $current_page == 'pickup') ? 'active' : ''; ?>" href="#">Restaurants</a>
                    <ul class="dropdown-menu bg-default">
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'delivery') ? 'active' : ''; ?>" href="{{route('restaurant.delivery')}}">Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'pickup') ? 'active' : ''; ?>" href="{{route('restaurant.pickup')}}">Pickup</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'home-chef') ? 'active' : ''; ?>" href="{{route('restaurant.homechef')}}">Home Chef</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page == 'blog' || $current_page == 'article') ? 'active' : ''; ?>" href="#">Blog</a>
                    <ul class="dropdown-menu bg-default">
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'blog') ? 'active' : ''; ?>" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'article') ? 'active' : ''; ?>" href="{{route('article')}}">Article</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page == 'go-partner' || $current_page == 'go-driver') ? 'active' : ''; ?>" href="#">Join Us</a>
                    <ul class="dropdown-menu bg-default">
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'go-partner') ? 'active' : ''; ?>" href="{{route('gopartner')}}">GoPartner</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'go-driver') ? 'active' : ''; ?>" href="{{route('godriver')}}">GoDriver</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?php echo ($current_page == 'contact-us' || $current_page == 'faqs') ? 'active border-bottom border-danger' : ''; ?>" href="#">Help</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="dropdown-item <?php echo ($current_page == 'faqs') ? 'active' : ''; ?>" href="{{route('faqs')}}">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item <?php echo ($current_page == 'contact-us') ? 'active' : ''; ?>" href="{{route('contactus')}}">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about-us') ? 'active border-bottom border-danger' : ''; ?>" href="{{route('aboutus')}}">About Us</a>
                </li>
            </ul>
        </div>

        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                <li class="nav-item d-none d-md-block">
                    <a href="https://orders.gofeast.pk" target="_blank"
                        class="btn btn-sm btn-primary rounded-pill">Order Food Online!</a>
                </li>
                <li class="nav-item d-lg-none">
                    <div class="navbar-hamburger"><button class="hamburger animate plain"
                            data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
            </ul>

        </div>

    </div>
    <?php //include 'social-navbar-top.html' ?>
    <!-- /.container -->
</nav>
