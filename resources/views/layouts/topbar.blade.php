<header id="navbar-sticky" class="navbar">
    <div class="container">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="http://mrg-landingnew.test/#home" class="logo">
                <img src="assets/images/logo.png" class="h-10" alt="WebAi Logo">
            </a>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button
                    class="hs-collapse-toggle inline-flex items-center justify-center h-9 w-12 rounded-md border border-white/20 bg-default-100/5"
                    type="button" id="hs-unstyled-collapse" data-hs-collapse="#mobileMenu" data-hs-type="collapse">
                    <i data-lucide="menu" class="h-5 w-5 stroke-white"></i>
                </button>
            </div>

            <!-- Nevigation Menu -->
            <div id="mobileMenu"
                class="hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto mt-2 lg:mt-0">
                <ul id="navbar-navlist" class="navbar-nav">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mrg-landingnew.test/#home">Home</a>
                    </li>

                    <!-- Services Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mrg-landingnew.test/#services">Services</a>
                    </li>

                    <!-- Blog Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mrg-landingnew.test/#blog">Blog</a>
                    </li>


                    <!-- Contact Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mrg-landingnew.test/#contact">Contact</a>
                    </li>

                    <!-- Faq Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://mrg-landingnew.test/#faq">Faq</a>
                    </li>

                    <!-- About Us Page Link -->
                    <li class="nav-item {{ Route::is('about') ? 'active' : ' ' }}">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </div>

        </nav><!-- end nav -->
    </div>
</header>
