<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Shine - Job Research || Community Enagement</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <!-- Styles -->
        <style>
            .group:hover .services_shape {
                fill: #3b82f6; /* Change to desired hover fill color */
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <div class="fixed top-0 left-0 w-full z-30 duration-300">
                <div class="container">
                    <nav class="navigation fixed w-full z-20 top-0 start-0">
                        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                            <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                                <img src="{{ asset('build/assets/images/logo.svg') }}" class="h-8" alt="Shine Logo">
                            </a>
                            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                                @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/dashboard') }}" class="inline-flex justify-center items-center py-2 px-4 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                                        Go to Dashboard
                                        <svg class="w-6 h-6 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                                        </svg>
                                    </a>
                                        {{-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm px-4 py-2 text-center"></button> --}}
                                    @else
                                        <a href="{{ route('login') }}" class="block py-2 px-4 mt-1 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent font-semibold text-lg text-center md:hover:text-blue-700 md:p-0" style="margin-right: 10px;">Log In</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="inline-flex justify-center items-center py-2 px-4 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                                                Register
                                                <svg class="w-6 h-6 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                                                </svg>
                                            </a>
                                        @endif
                                    @endauth
                                @endif
                                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                                <ul class="flex flex-col p-4 md:p-0 mt-4 font-semibold border text-xl rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                                    <li>
                                        <a href="{{ route('index') }}" class="{{ request()->is('/') ? 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}" {{ request()->is('/') ? 'aria-current="page"' : '' }}>Home</a>
                                    </li>
                                    <li>
                                        <a href="#" class="{{ request()->is('/about') ? 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0' }}" {{ request()->is('/about') ? 'aria-current="page"' : '' }}>About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services') }}" class="{{ request()->is('/services') ? 'active' : '' }} block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0" {{ request()->is('/services') ? 'aria-current="page"' : '' }}>Services</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Testimonal</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Navbar End -->
        </header>
        <!-- Header Area wrapper End -->
        @yield('index')

        {{-- <div class="m-4"></div> --}}
        <!-- Subscribe Section Start -->
        <section id="Subscribes" class="text-center py-20 bg-blue-100">
            <div class="container">
                <div class="flex justify-center mx-3">
                    <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2">
                        <h4 class="mb-3 text-2xl sm:text-4xl text-gray-600 font-extrabold wow fadeInUp" data-wow-delay="0.3s">Subscribe to our newsletter</h4>
                        <p class="mb-4 text-gray-600 leading-loose text-base sm:text-lg wow fadeInUp" data-wow-delay="0.6s">Existing customized ideas through client-based deliverables. <br class="hidden sm:inline"> Compellingly unleash fully tested outsourcing</p>
                        <form class="wow fadeInDown" data-wow-delay="0.3s">
                            <input type="email" class="w-full mb-5 sm:mb-0 sm:mr-5 bg-white border border-blue-300 rounded-full px-5 py-3 duration-300 focus:border-blue-600 outline-none" name="email" placeholder="Email Address">
                            <button class="border-0 bg-blue-600 text-center text-white rounded-full w-12 h-12 duration-300 hover:opacity-75" type="submit">
                                {{-- <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg> --}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section End -->

        <!-- Footer Section Start -->
        <footer id="footer" class="bg-gray-800 py-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 mb-8 sm:mb-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="mx-3">
                            <div class="footer-logo mb-3">
                                <img src="{{ asset('build/assets/images/logo.svg') }}" alt="">
                            </div>
                            <p class="text-gray-300">Here at Shine we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/6 xl:w-1/6 mb-8 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="mx-3">
                            <h3 class="font-bold text-xl text-white mb-5">Pages</h3>
                            <ul>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Home</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">About-Us</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Service</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Testimonial</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Blog</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Contact-Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/6 xl:w-1/6 mb-8 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="mx-3">
                            <h3 class="font-bold text-xl text-white mb-5">Features</h3>
                            <ul>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Live Section</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Client Login</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Client Registration</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">API Registration</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/6 xl:w-1/6 mb-8 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="mx-3">
                            <h3 class="font-bold text-xl text-white mb-5">Policy</h3>
                            <ul>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Terms and Conditions</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">API Policy</a></li>
                                <li><a href="#" class="text-gray-300 text-base font-semibold mb-5 hover:text-blue-900">Client Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 mb-8 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="mx-3">
                            <h3 class="font-bold text-xl text-white mb-5">Find us on</h3>
                            <ul class="social-icons flex justify-start">
                                <li class="group mx-2 bg-white rounded-full p-2 hover:bg-blue-900">
                                    <a href="#">
                                        <svg class="w-5 h-5 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M13.1 6H15V3h-1.9A4.1 4.1 0 0 0 9 7.1V9H7v3h2v10h3V12h2l.6-3H12V6.6a.6.6 0 0 1 .6-.6h.5Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="group mx-2 bg-white rounded-full p-2 hover:bg-blue-900">
                                    <a href="#">
                                        <svg class="w-5 h-5 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M13.8 10.5 20.7 2h-3l-5.3 6.5L7.7 2H1l7.8 11-7.3 9h3l5.7-7 5.1 7H22l-8.2-11.5Zm-2.4 3-1.4-2-5.6-7.9h2.3l4.5 6.3 1.4 2 6 8.5h-2.3l-4.9-7Z"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="group mx-2 bg-white rounded-full p-2 hover:bg-blue-900">
                                    <a href="#">
                                        <svg class="w-5 h-5 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 5.6c-1.4-.7-2.8-1.1-4.2-1.3l-.5 1c-1.5-.2-3-.2-4.6 0l-.5-1c-1.4.2-2.8.6-4.1 1.3a17.4 17.4 0 0 0-3 11.6 18 18 0 0 0 5 2.5c.5-.5.8-1.1 1.1-1.7l-1.7-1c.2 0 .3-.2.4-.3a11.7 11.7 0 0 0 10.2 0l.4.3-1.7.9 1 1.7c1.9-.5 3.6-1.4 5.1-2.6.4-4-.6-8.2-3-11.5ZM8.6 14.8a2 2 0 0 1-1.8-2 2 2 0 0 1 1.8-2 2 2 0 0 1 1.8 2 2 2 0 0 1-1.8 2Zm6.6 0a2 2 0 0 1-1.8-2 2 2 0 0 1 1.8-2 2 2 0 0 1 1.8 2 2 2 0 0 1-1.8 2Z"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="group mx-2 bg-white rounded-full p-2 hover:bg-blue-900">
                                    <a href="#" class="">
                                        <svg class="w-5 h-5 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.5 8.8v1.7a3.7 3.7 0 0 1 3.3-1.7c3.5 0 4.2 2.2 4.2 5v5.7h-3.2v-5c0-1.3-.2-2.8-2.1-2.8-1.9 0-2.2 1.3-2.2 2.6v5.2H9.3V8.8h3.2ZM7.2 6.1a1.6 1.6 0 0 1-2 1.6 1.6 1.6 0 0 1-1-2.2A1.6 1.6 0 0 1 6.6 5c.3.3.5.7.5 1.1Z" clip-rule="evenodd"/>
                                            <path d="M7.2 8.8H4v10.7h3.2V8.8Z"/>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full text-center">
                        <p class="text-gray-300 text-sm font-semibold">
                            Designed and Developed by
                            <a class="text-white duration-300 hover:text-blue-900" href="https://github.com/vickkykruz" rel="nofollow">Victor Chukwemeka</a> at
                            <a class="text-white duration-300 hover:text-blue-900" href="https://alxafrica.com" rel="nofollow">ALX Africa</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Go to Top Link -->
        <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-900 text-white text-lg z-20 duration-300 hover:bg-blue-400">
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
            </svg>
        </a>
    </body>
</html>
