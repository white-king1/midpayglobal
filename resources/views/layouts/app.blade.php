<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from zcube.in/bingle/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Mar 2022 21:34:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Midpay Global-Landing Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shorBtcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/dripicons.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/swiper.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <header class="header-area">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="/assets/img/logo/mdnew.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li><a href="#about">About Us</a></li>

                                        <li><a href="#screen">How It Works</a></li>


                                        {{-- <li><a href="{{route('fetch'), 1}}">Rigister As A Vendor</a></li> --}}

                                        @guest
                                        <li><a href="{{ route('register') }}">SignUp</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        @endguest

                                        @auth
                                        <li><a href="{{ route('user.dashboard') }}">My Dashboard</a></li>

                                        <li>
                                            <a href="javascript: void()">
                                            <form action="{{ route('logout') }} " method="post">@csrf

                                                <button style="border: none; background-color: none">Logout</button>
                                            </form>
                                            </a>

                                        </li>

                                        @endauth
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- main-area -->
   @yield('content')
    <!-- main-area-end -->
    <!-- footer -->
    <footer class="footer-bg footer-p pt-60"
        style="background-image: url(/assets/img/bg/f-bg.png); background-position: center top; background-size: auto;background-repeat: no-repeat;">

        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="logo mt-15 mb-15">
                                <a href="#"><img src="/assets/img/logo/mdnew.png" alt="logo"></a>
                            </div>
                            <div class="footer-text mb-20">
                                <p>We at Midfee Global,we ensure safe transactions.Intrust in us with your cash and we garaunty you enjoy the worth of your cash.

                                </p>
                            </div>
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Company News</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a class="sidebar-link sidebar-title link-nav"
                                        href="{{ route('terms') }}">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Useful Links</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a class="sidebar-link sidebar-title link-nav"
                                        href="{{ route('terms') }}">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Contact Us</h5>
                            </div>
                            <div class="footer-link">
                                <div class="f-contact">
                                    <ul>
                                        <li>
                                            <i class="icon dripicons-phone"></i>
                                            <span>+234 70 310 115 73<br>+234 90 977 632 24</span>
                                        </li>
                                        <li>
                                            <i class="icon dripicons-mail"></i>
                                            <span><a href="mailto:info@example.com">info@midappay.com</a><br><a
                                                    href="mailto:sale@example.com">sale@midappay.com</a></span>
                                        </li>
                                        <li>
                                            <i class="fal fa-map-marker-alt"></i>
                                            <span>PLOT 439 WATERBOARD EAGLE ISLAND <br> PORT-HARCOURT,<br>RIVERSSTATE,NIGERIA.</span>
                                        </li>
                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/one-page-nav-min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/paroller.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/js_isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.min.js"></script>
    <script src="/assets/js/parallax.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/typed.js"></script>
    <script src="/assets/js/parallax-scroll.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/element-in-view.js"></script>
    <script src="/assets/js/swiper.min.js"></script>
    <script src="/assets/js/main.js"></script>



</body>

<!-- Mirrored from zcube.in/bingle/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Mar 2022 21:38:21 GMT -->

</html>
