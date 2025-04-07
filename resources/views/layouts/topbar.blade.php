@php
    use Illuminate\Support\Facades\Auth;
@endphp

<header id="navbar-sticky" class="navbar">
    <div class="container pr-0.5 lg:pl-4 lg:pr-4">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="#home" class="logo">
                <img src="{{ asset('assets/images/logo/mrglogo-white.png') }}" class="h-10 w-20" alt="WebAi Logo">
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
                        <a class="nav-link" href="{{ route('home') }}#home">{{ __('public.navbar-home') }}</a>
                    </li>

                    <!-- About Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#about">{{ __('public.navbar-about') }}</a>
                    </li>

                    <!-- Services Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#services">{{ __('public.navbar-services') }}</a>
                    </li>

                    <!-- Contact Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contact">{{ __('public.navbar-contact') }}</a>
                    </li>

                    <!-- Faq Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#faq">{{ __('public.navbar-faq') }}</a>
                    </li>

                    <!-- Blog Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#blog">{{ __('public.navbar-blog') }}</a>
                    </li>

                    <!-- Login Page Link -->
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('public.navbar-logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}#login">{{ __('public.navbar-login') }}</a>
                        </li>
                    @endif

                    <div class="flex gap-4 items-center">
                        <li class="nav-item">
                            <a href="/lang/en"
                                class="flex items-center px-4 py-2 {{ session('locale') == 'en' ? 'text-purple-400 font-semibold' : 'text-white' }}">
                                <img src="{{ asset('assets/images/language/uk.png') }}" alt="UK Flag"
                                    class="w-5 h-5 mr-2">
                                English
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/lang/fr"
                                class="flex items-center px-4 py-2 {{ session('locale') == 'fr' ? 'text-purple-400 font-semibold' : 'text-white' }}">
                                <img src="{{ asset('assets/images/language/fr.png') }}" alt="French Flag"
                                    class="w-5 h-5 mr-2">
                                Français
                            </a>
                        </li>
                    </div>

                </ul>

            </div>

        </nav><!-- end nav -->
    </div>
</header>
