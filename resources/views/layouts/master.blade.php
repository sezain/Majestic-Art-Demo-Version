<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}

    <title> @yield('title') - Majestic Arts </title>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TGBQ8RQ');
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" /> --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('style')
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- pre-loader start -->
        <div class="preloader preloader-visible">
            <div class="preloader-num"></div>
        </div>
        <!-- pre-loader end -->

        <!-- placeholder start -->
        <div class="background-placeholder"></div>
        <!-- placeholder end -->


        <!-- cursor start -->
        <div class="cursor">
            <div id="cursor" class="cursor-item"></div>
        </div>
        <!-- cursor end -->

        <div id="swup" class="dark-sky">
            <!-- to-top-button start -->
            <a href="#firstSection" class="to-top-button to-id click-target">
                <i class="icon-arrow-left"></i>
            </a>
            <!-- to-top-button end -->

            <div class="header header-white">
                <!-- logo start -->
                <div class="logo-box">
                    <a data-swup href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('majesticarts-logo.svg') }}" alt="logo">
                    </a>
                </div>
                <!-- logo end -->

                <!-- menu-icon start -->
                <div class="menu-outer-wrap">
                    <div class="menu-wrap">
                        <div class="menu menu-hover click-target">
                            <span class="menu-line-1"></span>
                            <span class="menu-line-2"></span>
                            <span class="menu-line-3"></span>
                        </div>
                    </div>
                </div>
                <!-- menu-icon end -->
            </div>
        </div>
        <!-- menu-navigation end -->
        <div class="menu-navigation">
            <!-- menu-overlay start -->
            <div class="menu-overlay click-target"></div>
            <!-- menu-overlay end -->

            <!-- menu-background start -->
            <div class="menu-pre-background"></div>
            <!-- menu-background end -->

            <!-- menu-inner start -->
            <div class="menu-inner background-changer">
                <!-- menu-container start -->
                <div class="menu-container">

                    <!-- menu-header start -->
                    <div class="menu-header">
                        <h4>Navigate to</h4>
                    </div>
                    <!-- menu-header end -->


                    <!-- navigation start -->
                    <nav class="navigation">
                        <ul class="navigation-list">
                            <li class="menu-item-has-children"> 
                                <a data-swup href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('about') }}">About Majestic Arts</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('board-members') }}">
                                    About Board Members
                                </a>
                            </li>

                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('collection') }}">
                                    Majestic Arts Collection
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('news') }}">News</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('events') }}">Events</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-swup href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- navigation end -->

                    <!-- social start -->
                    <div class="social social-navigation">
                        <div class="social-item">
                            <a class="text-black" href="https://twitter.com/themajesticarts" rel="me" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-black" href="https://www.instagram.com/themajesticarts/" rel="me" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-black" href="https://www.facebook.com/majesticartsofficial" rel="me" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-black" href="https://www.linkedin.com/company/majesticarts/" rel="me" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                    <!-- social end -->

                </div>
                <!-- menu-container end -->
            </div>
            <!-- menu-inner end -->
        </div>
        <!-- menu-navigation end -->
    </header>
    <main id="swup">
        @yield('main-content')
    </main>
    <footer class="footer" style="background-color: #fbf6f1;">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row justify-content-md-between justify-content-sm-center">

            </div>
            <!-- row end -->


            <!-- row start -->
            <div class="row justify-content-between footer-bottom">
                <div class="col-md-6">
                    <div class="copyright">
                        <p class="text-goldden">&copy; {{ date('Y') }} Majestic Arts. All rights reserved</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer-social social">
                        <div class="social-item">
                            <a class="text-goldden" href="https://twitter.com/themajesticarts" rel="me" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-goldden" href="https://www.instagram.com/themajesticarts/" rel="me" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-goldden" href="https://www.facebook.com/majesticartsofficial" rel="me" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div class="social-item">
                            <a class="text-goldden" href="https://www.linkedin.com/company/majesticarts/" rel="me" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>  
        <!-- container end -->
    </footer>
</body>
<!--  -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/plug/plugins.js') }}"></script>
<script src="{{ asset('js/plug/universal-tilt.js') }}"></script>

<script type="text/javascript">
    function tiltJsParallUx() {
        var windowWidth = $(window).width();
        if (windowWidth > 991) {
            $('.tilt').UniversalTilt({
                max: 35,
                perspective: 1500,
                mobile: false,
            });
        }
    }
    tiltJsParallUx();
</script>

<script type="text/javascript">
    $('.background-changer').on('mouseover', 'a', function() {

        var background = "url('" + $(this).attr('data-background') + "')";

        $('.background-changer').css('background-image', background)
    });
</script>

{{-- <script type="text/javascript">
    function goBack() {
        window.history.back();
    }
</script> --}}
@stack('scripts')

</html>
