@php
    use Illuminate\Support\Facades\Auth;
@endphp

<header id="navbar-sticky" class="navbar">
    <div class="container">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="#home" class="logo">
                <img src="{{ asset('assets/images/logo/mrglogo-white.png')}}" class="h-10 w-20" alt="WebAi Logo">
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
                        <a class="nav-link" href="{{ route('home') }}#home">Home</a>
                    </li>

                    <!-- Services Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#services">Services</a>
                    </li>

                    <!-- Blog Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#blog">Blog</a>
                    </li>

                    <!-- About Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#about">About</a>
                    </li>

                    <!-- Contact Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
                    </li>

                    <!-- Faq Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#faq">FAQ</a>
                    </li>

                    <!-- Login Page Link -->

                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}#login">Login</a>
                        </li>
                    @endif

                </ul>
            </div>

        </nav><!-- end nav -->
    </div>
</header>
