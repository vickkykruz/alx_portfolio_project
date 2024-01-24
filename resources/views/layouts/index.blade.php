<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shine - Job Research || Community Enagement</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('build/assets/dist/css/icons/LineIcons.2.0.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('build/assets/dist/css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/dist/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/dist/css/tiny-slider.css') }}">
    </head>
    <body class="antialiased">
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader" id="loader-1"></div>
        </div>
        <!-- End Preloader -->
       <!-- Header Area wrapper Starts -->
        <header id="header-wrap" class="relative">
            <!-- Navbar Start -->
            <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
                <div class="container">
                    <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('build/assets/images/logo.svg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                                <li class="nav-item">
                                    <a class="page-scroll {{ request()->is('/') ? 'active' : '' }}" href="#hero-area">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#feature">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#testimonial">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#testimonial">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        @if (Route::has('login'))
                        <div class="header-btn hidden sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                                @auth
                                <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                                @else
                                {{-- <a class="text-blue-600 px-10 py-3" href="{{ route('login') }}">Log in</a> --}}
                                    @if (Route::has('register'))
                                    <a class="text-blue-600 border border-blue-600 px-10 py-3 rounded-full duration-300 hover:bg-blue-600 hover:text-white" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </nav>
                </div>
            </div>
            <!-- Navbar End -->
        </header>
        <!-- Header Area wrapper End -->
        @yield('index')

        <div class="m-4"></div>

        <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
            <div class="container">
              <div class="flex flex-wrap">
                <div class="w-full text-center">
                  <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://github.com/vickkykruz" rel="nofollow">Victor Chukwemeka</a> at <a class="text-white duration-300 hover:text-blue-600" href="https://alxafrica.com" rel="nofollow">ALX Africa</a></p>
                </div>
              </div>
            </div>
        </section>

        <!-- Go to Top Link -->
        <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
            <i class="lni lni-arrow-up"></i>
        </a>

        {{-- Script Files --}}
        <script src="{{ asset('build/assets/dist/js/contact-form.js') }}"></script>
        <script src="{{ asset('build/assets/dist/js/main.js') }}"></script>
        <script src="{{ asset('build/assets/dist/js/tiny-slider.js') }}"></script>
        <script src="{{ asset('build/assets/dist/js/wow.js') }}"></script>
    </body>
</html>
