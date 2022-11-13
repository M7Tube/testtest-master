<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/maherLogo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/maherLogo.png') }}">

    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('head')
    @livewireStyles
</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            {{-- <h1 class="logo"><a href="{{ route('homepage', 'en') }}">{{ __('Maher Shehadie') }}</a></h1> --}}
            <a href="{{ route('homepage', app()->getLocale()) }}" class="logo"><img src="{{ asset('img/maherLogo.png') }}" alt=""  width="100px;" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ route('homepage', 'en') }}">{{ __('Home') }}</a>
                    </li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllServices', app()->getLocale()) }}">{{ __('Services') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllItems', app()->getLocale()) }}">{{ __('Items') }}</a></li>
                    <li><a class="nav-link scrollto"
                            href="{{ route('showAllPosts', app()->getLocale()) }}">{{ __('Blog') }}</a></li>

                    @if (app()->getLocale() == 'en')
                        <li><a class="nav-link scrollto " href="{{ route('changLang', app()->getLocale()) }}"><i
                                    class="bi bi-translate"></i> عربي <i class="bi bi-arrow-repeat"></i></a>
                        </li>
                    @else
                        <li><a class="nav-link scrollto " href="{{ route('changLang', app()->getLocale()) }}"><i
                                    class="bi bi-translate"></i> English <i class="bi bi-arrow-repeat"></i></a>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('body')

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        {{-- <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor2 JS Files -->
    <script src="{{ asset('vendor2/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('vendor2/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('lastofthehead')
    @livewireScripts
</body>

</html>
