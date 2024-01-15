<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Styles Files -->
        <link rel="stylesheet" href="{{ asset('build/assets/external_files/dist/css/animated.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/external_files/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/external_files/dist/css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/external_files/dist/css/templatemo-chain-app-dev.css') }}">
    </head>
    <body class="antialiased">
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="{{ asset('build/assets/external_files/dist/images/logo.png') }}" alt="Chain App Dev">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                @if (Route::has('login'))
                                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                                    <li class="scroll-to-section"><a href="#services">Services</a></li>
                                    <li class="scroll-to-section"><a href="#about">About</a></li>
                                    <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
                                    <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
                                    @auth
                                        <li>
                                            <div class="gradient-button">
                                                <a id="modal_trigger" href="{{ url('/dashboard') }}"><i class="fa fa-sign-in-alt"></i> Go to Dashboard</a>
                                            </div>
                                        </li>
                                    @else
                                        {{-- <li class="scroll-to-section"><a href="{{ route('login') }}">Log in</a></li> --}}
                                        @if (Route::has('register'))
                                            <li>
                                                <div class="gradient-button">
                                                    {{-- {{ route('register') }} --}}
                                                    <a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a>
                                                </div>
                                            </li>
                                        @endif
                                    @endauth
                                    {{-- </div> --}}
                                @endif
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
        <div id="modal" class="popupContainer" style="display:none;">
            <div class="popupHeader">
                <span class="header_title">Login</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </div>

            <section class="popupBody">
                <!-- Social Login -->
                <div class="social_login">
                    <div class="">
                        <a href="#" class="social_box fb">
                            <span class="icon"><i class="fab fa-facebook"></i></span>
                            <span class="icon_title">Connect with Facebook</span>

                        </a>

                        <a href="#" class="social_box google">
                            <span class="icon"><i class="fab fa-google-plus"></i></span>
                            <span class="icon_title">Connect with Google</span>
                        </a>
                    </div>

                    <div class="centeredText">
                        <span>Or use your Email address</span>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                        <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                    </div>
                </div>

                <!-- Username & Password Login form -->
                <div class="user_login">
                    <form>
                        <label>Email / Username</label>
                        <input type="text" />
                        <br />

                        <label>Password</label>
                        <input type="password" />
                        <br />

                        <div class="checkbox">
                            <input id="remember" type="checkbox" />
                            <label for="remember">Remember me on this computer</label>
                        </div>

                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                            <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                        </div>
                    </form>

                    <a href="#" class="forgot_password">Forgot password?</a>
                </div>

                <!-- Register Form -->
                <div class="user_register">
                    <form>
                        <label>Full Name</label>
                        <input type="text" />
                        <br />

                        <label>Email Address</label>
                        <input type="email" />
                        <br />

                        <label>Password</label>
                        <input type="password" />
                        <br />

                        <div class="checkbox">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">Send me occasional email updates</label>
                        </div>

                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                            <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">

        </div> --}}

        {{-- Scripts Files --}}
        <script src="{{ asset('build/assets/external_files/dist/js/animation.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/custom.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/imagesloaded.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('build/assets/external_files/dist/js/popup.js') }}"></script>
    </body>
</html>
