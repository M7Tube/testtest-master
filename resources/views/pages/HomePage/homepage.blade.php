<!DOCTYPE html>

@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="ltr">
@endif

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/maherLogo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/maherLogo.png') }}">
    <title>{{ __('Maher Shehadie') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <link href="{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor2/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Mobiscroll JS and CSS Includes -->
    {{-- <link rel="stylesheet" href="{{ asset('css/mobiscroll.javascript.min.css') }}">
    <script src="{{ asset('js/mobiscroll.javascript.min.js') }}"></script>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        body,
        html {
            height: 100%;
        }

        .md-calendar-booking .mbsc-calendar-text {
            text-align: center;
        }

        .md-calendar-booking .booking-datetime .mbsc-datepicker-tab-calendar {
            flex: 1 1 0;
            min-width: 300px;
        }

        .md-calendar-booking .mbsc-timegrid-item {
            margin-top: 1.5em;
            margin-bottom: 1.5em;
        }

        .md-calendar-booking .mbsc-timegrid-container {
            top: 30px;
        }

    </style> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/CalendarPicker.style.css') }}">
    <style>
        /* body {
            display: grid;
            justify-items: center;
            align-content: center;
            min-height: 100vh;
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        } */

        #github {
            position: absolute;
            right: -5rem;
            top: 0.6rem;
            background-color: black;
            transform: rotate(25deg);

        }

        #github a,
        #github a:link,
        #github a:visited {
            display: inline-block;
            padding: 1rem 8rem;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: transform 300ms;
        }

        #github a:hover {
            text-decoration: underline;
            transform: translateX(0.4rem);
        }

        #download-options {
            margin-bottom: 2rem;
        }

        #download-options h3:last-of-type {
            margin-top: 2rem;
        }

        #download-options code {
            font-size: 1.2rem;
        }

        #myCalendarWrapper {
            width: 40em;
            border: 1px dashed black;
            padding: 2em 4em;
            position: relative;
            font-size: 1rem;
            margin: 2rem auto 5rem;
        }

        #myCalendarWrapper:before {
            content: '#myCalendarWrapper';
            position: absolute;
            font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New', monospace;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 2.4rem);
            font-size: 1.2rem;
            background-color: rgba(93, 93, 93, 0.2);
            padding: 0.5rem 1rem 0.4rem;
            color: rgb(233, 72, 99);
        }

        code {
            font-size: 0.7rem;
            background-color: rgb(249, 249, 249);
            padding: 0.5rem;
            margin: 1rem 0 3rem;
            border-radius: 5px;
            box-shadow: 2px 2px 0.2rem rgba(0, 0, 0, 0.2);
        }

        code h3 {
            padding: 0;
            margin: 0;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        }

        code pre {
            font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New', monospace;
        }

        .pink {
            color: rgb(233, 72, 99);
        }

        #example {
            margin: 0 auto;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
                'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
                sans-serif;
        }

        #example h3:not(:first-of-type) {
            margin-top: 3rem;
        }

        #example p {
            font-size: 0.9rem;
        }

        #download-options {
            margin-bottom: 5rem;
        }

        #download-options h2:last-of-type {
            margin-top: 2rem;
        }

        #download-options code {
            font-size: 1.2rem;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                {{-- @if (app()->getLocale() == 'ar')
                    <h1 class="logo"><a href="{{ route('homepage', app()->getLocale()) }}">{{ $info->ar_peronal_name }}</a>
                    </h1>
                @else
                    <h1 class="logo"><a href="{{ route('homepage', app()->getLocale()) }}">{{ $info->en_peronal_name }}</a>
                    </h1>
                @endif --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>-->
                <a href="{{ route('homepage', app()->getLocale()) }}" class="logo"><img src="{{ asset('img/maherLogo.png') }}" alt="" width="100px;" class="img-fluid"></a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>
                        <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                        <li><a class="nav-link scrollto"
                                href="{{ route('showAllServices', app()->getLocale()) }}">{{ __('Services') }}</a></li>
                        <li><a class="nav-link scrollto"
                                href="{{ route('showAllItems', app()->getLocale()) }}">{{ __('Items') }}</a></li>
                        <li><a class="nav-link scrollto"
                                href="{{ route('showAllPosts', app()->getLocale()) }}">{{ __('Blog') }}</a></li>

                        {{-- <li class="dropdown"><a href="#"><span>dDrop Down</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li> --}}
                        <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>
                        @if (app()->getLocale() == 'ar')
                            <li><a class="nav-link scrollto " href="{{ route('homepage', 'en') }}">English<i
                                        class="bi bi-translate"></i></a></li>
                        @else
                            <li><a class="nav-link scrollto " href="{{ route('homepage', 'ar') }}">عربي<i
                                        class="bi bi-translate"></i></a></li>
                        @endif
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <div id="hero" class="hero route bg-image"
            style="background-image: url('data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents(storage_path('app/img/' . $info->big_personal_pic))) !!}')">
            <div class="overlay-itro"></div>
            <div class="hero-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <!--<p class="display-6 color-d">Hello, world!</p>-->
                        @if (app()->getLocale() == 'ar')
                            <h1 class="hero-title mb-4">{{ $info->ar_peronal_name }}</h1>
                        @else
                            <h1 class="hero-title mb-4">{{ $info->en_peronal_name }}</h1>
                        @endif
                        @if (app()->getLocale() == 'ar')
                            <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $info->ar_skills }}"></span>
                            </p>
                        @else
                            <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $info->en_skills }}"></span>
                            </p>
                        @endif
                        <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                    </div>
                </div>
            </div>
        </div><!-- End Hero Section -->
        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="about-img">
                                                    <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $info->small_personal_pic)) !!}"
                                                        class="img-fluid rounded b-shadow-a" alt="personal picture">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-7">
                                                <div class="about-info">
                                                    @if (app()->getLocale() == 'ar')
                                                        <p><span class="title-s">{{ __('Name:') }} </span>
                                                            <span>{{ $info->ar_peronal_name }}</span>
                                                        </p>
                                                    @else
                                                        <p><span class="title-s">{{ __('Name:') }} </span>
                                                            <span>{{ $info->en_peronal_name }}</span>
                                                        </p>
                                                    @endif
                                                    @if (app()->getLocale() == 'ar')
                                                        <p><span class="title-s">{{ __('Profile:') }} </span>
                                                            <span>{{ $info->ar_job_title }}</span>
                                                        </p>
                                                    @else
                                                        <p><span class="title-s">{{ __('Profile:') }} </span>
                                                            <span>{{ $info->en_job_title }}</span>
                                                        </p>
                                                    @endif
                                                    <p><span class="title-s">{{ __('Email:') }} </span>
                                                        <span>{{ $info->email }}</span>
                                                    </p>
                                                    <p><span class="title-s">{{ __('Phone:') }} </span>
                                                        <span>{{ $info->phone }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-mf">
                                            <p class="title-s">{{ __('Skill') }}</p>
                                            @forelse ($skills as $skill)
                                                @if (app()->getLocale() == 'ar')
                                                    <span>{{ $skill->ar_name }}</span> <span
                                                        class="pull-right">{{ $skill->percent }}%</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ $skill->percent }}%;"
                                                            aria-valuenow="{{ $skill->percent }}" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                @else
                                                    <span>{{ $skill->en_name }}</span> <span
                                                        class="pull-right">{{ $skill->percent }}%</span>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ $skill->percent }}%;"
                                                            aria-valuenow="{{ $skill->percent }}" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                @endif
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-me pt-4 pt-md-0">
                                            <div class="title-box-2">
                                                <h5 class="title-left">
                                                    {{ __('About me') }}
                                                </h5>
                                            </div>
                                            @if (app()->getLocale() == 'ar')
                                                <p class="lead">
                                                    {{ $info->ar_peronal_desc }} </p>
                                            @else
                                                <p class="lead">
                                                    {{ $info->en_peronal_desc }} </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services-mf pt-5 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    {{ __('Services') }}
                                </h3>
                                <p class="subtitle-a">
                                    {{ __('Services that help you achieve your goals') }}
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($services as $service)
                            @if (app()->getLocale() == 'ar')
                                <div class="col-md-4">
                                    <a
                                        href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                        <div class="service-box">
                                            <div class="work-img">
                                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                                    alt="Picture" class="img-fluid" style="width: 100%;
                                                    height: 20vw;
                                                    object-fit: fill;">
                                            </div>
                                            <div class="service-content">
                                                <h2 class="s-title">{{ $service->ar_name }}</h2>
                                                <p class="s-description text-center">
                                                    <a
                                                        href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
                                                        class="text-primary">
                                                        {{ __('Read More') }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @else
                                <div class="col-md-4">
                                    <a
                                        href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}">
                                        <div class="service-box">
                                            <div class="work-img">
                                                <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $service->icon)) !!}"
                                                    alt="Picture" class="img-fluid" style="width: 100%;
                                                    height: 20vw;
                                                    object-fit: fill;">
                                            </div>
                                            <div class="service-content">
                                                <h2 class="s-title">{{ $service->en_name }}</h2>
                                                <p class="s-description text-center">
                                                  <a
                                                        href="{{ route('ShowService', [app()->getLocale(), 'id' => $service->service_id]) }}"
                                                        class="text-primary">
                                                        {{ __('Read More') }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @empty
                            <h4 class="text-center">{{ __('Empty') }}</h4>
                        @endforelse
                    </div>
                </div>
            </section>

            <!-- ======= Counter Section ======= -->
            <div class="section-counter paralax-mf bg-image"
                style="background-image: url({{ asset('img/counters-bg.jpg') }}">
                <div class="overlay-mf"></div>
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-sm-3 col-lg-3">
                            <div class="counter-box counter-box pt-4 pt-md-0">
                                <div class="counter-ico">
                                    <span class="ico-circle"><i class="bi bi-check"></i></span>
                                </div>
                                <div class="counter-num">
                                    <p data-purecounter-start="0"
                                        data-purecounter-end="{{ $statistics->work_complated }}"
                                        data-purecounter-duration="1" class="counter purecounter"></p>
                                    <span class="counter-text">{{ __('WORKS COMPLETED') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="counter-box pt-4 pt-md-0">
                                <div class="counter-ico">
                                    <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                                </div>
                                <div class="counter-num">
                                    <p data-purecounter-start="0"
                                        data-purecounter-end="{{ $statistics->years_of_experience }}"
                                        data-purecounter-duration="1" class="counter purecounter"></p>
                                    <span class="counter-text">{{ __('YEARS OF EXPERIENCE') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="counter-box pt-4 pt-md-0">
                                <div class="counter-ico">
                                    <span class="ico-circle"><i class="bi bi-people"></i></span>
                                </div>
                                <div class="counter-num">
                                    <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->total_clients }}"
                                        data-purecounter-duration="1" class="counter purecounter"></p>
                                    <span class="counter-text">{{ __('TOTAL CLIENTS') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="counter-box pt-4 pt-md-0">
                                <div class="counter-ico">
                                    <span class="ico-circle"><i class="bi bi-award"></i></span>
                                </div>
                                <div class="counter-num">
                                    <p data-purecounter-start="0" data-purecounter-end="{{ $statistics->award_won }}"
                                        data-purecounter-duration="1" class="counter purecounter"></p>
                                    <span class="counter-text">{{ __('AWARD WON') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Counter Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="items" class="portfolio-mf sect-pt4 route">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    Make apppointment
                                </h3>
                                <div class="col-md-8">

                                    <div mbsc-page class="demo-appointment-booking">
                                        <div style="height:100%">
                                            <div class="md-calendar-booking">
                                                <div class="mbsc-form-group">
                                                    <div class="mbsc-form-group-title">Select date & time</div>
                                                    <div id="demo-booking-datetime" class="booking-datetime"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                {{ __('Items') }}
                            </h3>
                            <p class="subtitle-a">
                                {{ __('Books and files that will help you develop yourself and develop your project') }}
                            </p>
                            <div class="line-mf"></div>
                        </div>
                        @forelse ($items as $item)
                            <div class="col-md-4">
                                <a href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                    style="text-decoration: none;">
                                    <div class="work-box">
                                        {{-- <a href="{!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"> --}}
                                        <div class="work-img">
                                            <img src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $item->picture)) !!}"
                                                alt="Picture" class="img-fluid" style="width: 100%;
                                                height: 20vw;
                                                object-fit: fill;">
                                        </div>
                                        {{-- </a> --}}
                                        <div class="work-content">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    @if (app()->getLocale() == 'ar')
                                                        <h2 class="w-title">{{ $item->ar_name }}</h2>
                                                    @else
                                                        <h2 class="w-title">{{ $item->en_name }}</h2>
                                                    @endif
                                                    @if (app()->getLocale() == 'ar')
                                                        <div class="w-more">
                                                            <span class="text-center"><a
                                                                href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                                                class="text-primary">
                                                                {{ __('Read More') }}</a></span><br>
                                                            <span class="w-date">{{ $item->created_at }}</span>
                                                        </div>
                                                    @else
                                                        <div class="w-more">
                                                            <span class="text-center"><a
                                                                href="{{ route('ShowItem', [app()->getLocale(), 'id' => $item->item_id]) }}"
                                                                class="text-primary">
                                                                {{ __('Read More') }}</a></span><br>
                                                            <span class="w-date">{{ $item->created_at }}</span>
                                                        </div>
                                                    @endif

                                                </div>
                                                {{-- <div class="col-sm-4">
                                                <div class="w-like">
                                                    <a href="portfolio-details.html"> <span
                                                            class="bi bi-plus-circle"></span></a>
                                                </div>
                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <h4 class="text-center">{{ __('Empty') }}</h4>
                        @endforelse
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
            <br>
            <hr>
            <section id="newsletter" class="portfolio-mf sect-pt4 route">
                @livewire('newsletter-email')
            </section>
            <br>
            {{-- <hr>
            <div class="container">
                <div class="row">
                    {{ $date }}
                    <div class="col-10 col-md-12">
                        <div id="showcase-wrapper">
                            <h3 class="text-center">{{ __('Appointment Booking') }}</h3>
                            <div id="test"></div>
                             <div id="example">
                                <h3>currentValue:
                                    <p id="current-date"></p>
                                </h3>
                                <h3>currentValue.getDay():
                                    <p id="current-day"></p>
                                </h3>
                                <h3>currentValue.toDateSring():
                                    <p id="current-datestring"></p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> --}}
            <hr>
            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    {{ __('Blog') }}
                                </h3>
                                <p class="subtitle-a">
                                    {{ __('Articles that will help you develop your project and develop yourself') }}
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($posts as $post)
                            <div class="col-md-4 mb-3">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"><img
                                                src="data:image/png|jpg|jpeg;base64, {!! base64_encode(file_get_contents('../storage/app/img/' . $post->picture)) !!}"
                                                alt="picture" class="img-fluid" style="width: 100%;
                                                height: 20vw;
                                                object-fit: fill;"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">{{ $post->main_title }}</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title"><a
                                                href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}">{{ $post->title }}</a>
                                        </h3>
                                        <p class="card-description">
                                            {!! substr($post->body, 0, 100) !!}<a
                                                href="{{ route('post', [app()->getLocale(), 'id' => $post->post_id]) }}"
                                                class="text-primary">
                                                {{ __('...Read More') }}</a>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="post-author">
                                            <span class="author"><b>{{ $post->user->name }}</b></span>
                                        </div>
                                        <div class="post-date">
                                            <span class="bi bi-clock"></span> {{ $post->created_at }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4 class="text-center">{{ __('Empty') }}</h4>
                        @endforelse


                    </div>
                </div>
            </section><!-- End Blog Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
                style="background-image: url({{ asset('img/overlay-bg.jpg') }}">
                <div class="overlay-mf"></div>
                @livewire('messages.send-message', ['info' => $info])
            </section><!-- End Contact Section -->

        </main><!-- End #main -->
        <div class="floating-container">
            <div class="floating-button"><i class="bi bi-person-lines-fill"></i></div>
            <div class="element-container">
                <a href="{{ $info->linkedIn ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                        <i class="bi bi-whatsapp"></i>
                    </span></a>
                <a href="{{ $info->facebook ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                        <i class="bi bi-facebook"></i>
                    </span></a>
                <a href="{{ $info->instagram ?? '' }}" target="blank"> <span class="float-element tooltip-left">
                        <i class="bi bi-instagram"></i>
                    </span></a>
            </div>
        </div>
    </div>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
        style="background-color: #2cb3f0;"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor2 JS Files -->
    <script src="{{ asset('vendor2/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor2/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor2/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('vendor2/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- <script>
        // Polyfill for Element.prototype.closest (for IE 9+)
        if (!Element.prototype.matches) {
            Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
        }
        if (!Element.prototype.closest) {
            Element.prototype.closest = function(s) {
                var el = this;
                do {
                    if (Element.prototype.matches.call(el, s)) return el;
                    el = el.parentElement || el.parentNode;
                } while (el !== null && el.nodeType === 1);
                return null;
            };
        }

        /**
         * @class CalendarPicker.
         * @description Provides a simple way to get a minimalistic calender in your DOM.
         * @author Mathias Picker - 29 July 2020.
         */
        function CalendarPicker(element, options) {
            // Core variables.
            this.date = new Date();
            this._formatDateToInit(this.date);

            this.day = this.date.getDay()
            this.month = this.date.getMonth();
            this.year = this.date.getFullYear();

            // Storing the todays date for practical reasons.
            this.today = this.date;

            // The calendars value should always be the current date.
            this.value = this.date;

            // Ranges for the calendar (optional).
            this.min = options.min;
            this.max = options.max;
            this._formatDateToInit(this.min);
            this._formatDateToInit(this.max);

            // Element to insert calendar in.
            this.userElement = document.querySelector(element);

            // Setting current date as readable text.
            this._setDateText();

            // The elements used to build the calendar.
            this.calendarWrapper = document.createElement('div');
            this.calendarElement = document.createElement('div')
            this.calendarHeader = document.createElement('header');
            this.calendarHeaderTitle = document.createElement('h4');
            this.navigationWrapper = document.createElement('section')
            this.previousMonthArrow = document.createElement('button');
            this.nextMonthArrow = document.createElement('button');
            this.calendarGridDays = document.createElement('section')
            this.calendarGrid = document.createElement('section');
            this.calendarDayElementType = 'time';

            var beginningOfYearOnMonday = new Date('2018-01-01');
            var locale = options.locale || 'en-US';
            this.listOfAllDaysAsText = [...Array(7).keys()].map(this._toTranslatedWeekday(beginningOfYearOnMonday, locale,
                options.showShortWeekdays))
            this.listOfAllMonthsAsText = [...Array(12).keys()].map(this._toTranslatedMonth(beginningOfYearOnMonday, locale))

            // Creating the calendar
            this.calendarWrapper.id = 'calendar-wrapper';
            this.calendarElement.id = 'calendar';
            this.calendarGridDays.id = 'calendar-days';
            this.calendarGrid.id = 'calendar-grid';
            this.navigationWrapper.id = 'navigation-wrapper';
            this.previousMonthArrow.id = 'previous-month';
            this.nextMonthArrow.id = 'next-month';

            this._insertHeaderIntoCalendarWrapper();
            this._insertCalendarGridDaysHeader();
            this._insertDaysIntoGrid();
            this._insertNavigationButtons();
            this._insertCalendarIntoWrapper();

            this.userElement.appendChild(this.calendarWrapper);
        }

        CalendarPicker.prototype._toTranslatedWeekday = function(beginningOfYearOnMonday, locale, showShortWeekdays) {
            var weekdayFormat = showShortWeekdays ? 'short' : 'long'
            return function(dayOfWeekIndex) {
                return new Intl.DateTimeFormat(locale, {
                        weekday: weekdayFormat
                    })
                    .format(new Date(beginningOfYearOnMonday.getFullYear(), beginningOfYearOnMonday.getMonth(),
                        beginningOfYearOnMonday.getDate() + dayOfWeekIndex))
            }
        }

        CalendarPicker.prototype._toTranslatedMonth = function(beginningOfYearOnMonday, locale) {
            return function(monthIndex) {
                return new Intl.DateTimeFormat(locale, {
                        month: 'long'
                    })
                    .format(new Date(beginningOfYearOnMonday.getFullYear(), beginningOfYearOnMonday.getMonth() +
                        monthIndex, beginningOfYearOnMonday.getDate()))
            }
        }

        /**
         * @param {Number} The month number, 0 based.
         * @param {Number} The year, not zero based, required to account for leap years.
         * @return {Array<Date>} List with date objects for each day of the month.
         * @author Juan Mendes - 30th October 2012.
         */
        CalendarPicker.prototype._getDaysInMonth = function(month, year) {
            if ((!month && month !== 0) || (!year && year !== 0)) return;

            var date = new Date(year, month, 1);
            var days = [];

            while (date.getMonth() === month) {
                days.push(new Date(date));
                date.setDate(date.getDate() + 1);
            }
            return days;
        }

        /**
         * @param {DateObject} date.
         * @description Sets the clock of a date to 00:00:00 to be consistent.
         */
        CalendarPicker.prototype._formatDateToInit = function(date) {
            if (!date) return;
            date.setHours(0, 0, 0);
        }

        /**
         * @description Sets the current date as readable text in their own variables
         */
        CalendarPicker.prototype._setDateText = function() {
            // Setting current date as readable text.
            var dateData = this.date.toString().split(' ');
            this.dayAsText = dateData[0];
            this.monthAsText = dateData[1];
            this.dateAsText = dateData[2];
            this.yearAsText = dateData[3];
        }

        /**
         * @description Inserts the calendar into the wrapper and adds eventListeners for the calendar-grid.
         */
        CalendarPicker.prototype._insertCalendarIntoWrapper = function() {
            this.calendarWrapper.appendChild(this.calendarElement);

            /**
             * @param {Event} event An event from an eventListener.
             */
            var handleSelectedElement = (event) => {
                if (event.target.nodeName.toLowerCase() === this.calendarDayElementType && !event.target.classList
                    .contains('disabled')) {

                    // Removes the 'selected' class from all elements that have it.
                    Array.from(this.calendarGrid.querySelectorAll('.selected')).forEach(element => element.classList
                        .remove('selected'));

                    // Adds the 'selected'-class to the selected date.
                    event.target.classList.add('selected');

                    this.value = event.target.value;
                    // document.getElementById("dateValue").value = this.value;
                    // Fires the onValueChange function with the provided callback.
                    this.onValueChange(this.callback);
                    // alert(this.value);
                    Livewire.emit('getData', this.value);
                }
            }

            this.calendarGrid.addEventListener('click', handleSelectedElement, false);

            this.calendarGrid.addEventListener('keydown', (keyEvent) => {
                if (keyEvent.key !== 'Enter') return;

                handleSelectedElement(keyEvent);
            }, false);
        }

        /**
         * @description Adds the "main" calendar-header.
         */
        CalendarPicker.prototype._insertHeaderIntoCalendarWrapper = function() {
            this.calendarHeaderTitle.textContent = this.listOfAllMonthsAsText[this.month] + ' - ' + this.year;
            this.calendarHeader.appendChild(this.calendarHeaderTitle);
            this.calendarWrapper.appendChild(this.calendarHeader);
        }

        /**
         * @description Inserts the calendar-grid header with all the weekdays.
         */
        CalendarPicker.prototype._insertCalendarGridDaysHeader = function() {
            this.listOfAllDaysAsText.forEach(day => {
                var dayElement = document.createElement('span');
                dayElement.textContent = day;
                this.calendarGridDays.appendChild(dayElement);
            })

            this.calendarElement.appendChild(this.calendarGridDays);
        }

        /**
         * @description Adds the "Previous" and "Next" arrows on the side-navigation.
         * Also inits the click-events used to navigating.
         */
        CalendarPicker.prototype._insertNavigationButtons = function() {
            // Ugly long string, but at least the svg is pretty.
            var arrowSvg =
                '<svg enable-background="new 0 0 386.257 386.257" viewBox="0 0 386.257 386.257" xmlns="http://www.w3.org/2000/svg"><path d="m0 96.879 193.129 192.5 193.128-192.5z"/></svg>';

            this.previousMonthArrow.innerHTML = arrowSvg;
            this.nextMonthArrow.innerHTML = arrowSvg;

            this.previousMonthArrow.setAttribute('aria-label', 'Go to previous month');
            this.nextMonthArrow.setAttribute('aria-label', 'Go to next month');

            this._toggleNavigationButtons();

            this.navigationWrapper.appendChild(this.previousMonthArrow);
            this.navigationWrapper.appendChild(this.nextMonthArrow);

            // Cannot use arrow-functions for IE support :(
            var that = this;
            this.navigationWrapper.addEventListener('click', function(clickEvent) {
                if (clickEvent.target.closest('#' + that.previousMonthArrow.id)) {
                    if (that.month === 0) {
                        that.month = 11;
                        that.year -= 1;
                    } else {
                        that.month -= 1;
                    }
                    that._updateCalendar();
                }

                if (clickEvent.target.closest('#' + that.nextMonthArrow.id)) {
                    if (that.month === 11) {
                        that.month = 0;
                        that.year += 1;
                    } else {
                        that.month += 1;
                    }
                    that._updateCalendar();
                }
            }, false)

            that.calendarElement.appendChild(that.navigationWrapper);
        }

        CalendarPicker.prototype._beginningOfMonth = function(date) {
            return new Date(date.getFullYear(), date.getMonth())
        }

        CalendarPicker.prototype._endOfMonth = function(date) {
            return new Date(date.getFullYear(), date.getMonth() + 1);
        }

        CalendarPicker.prototype._toggleNavigationButtons = function() {
            this.previousMonthArrow.toggleAttribute('disabled', !!this.min && this._beginningOfMonth(this.date) <= this
                .min);
            this.nextMonthArrow.toggleAttribute('disabled', !!this.max && this._endOfMonth(this.date) >= this.max);
        }

        /**
         * @description Adds all the days for current month into the calendar-grid.
         * Takes into account which day the month starts on, so that "empty/placeholder" days can be added
         * in case the month for example starts on a Thursday.
         * Also disables the days that are not within the provided.
         */
        CalendarPicker.prototype._insertDaysIntoGrid = function() {
            this.calendarGrid.innerHTML = '';

            var arrayOfDays = this._getDaysInMonth(this.month, this.year);
            var firstDayOfMonth = arrayOfDays[0].getDay();

            // Converting Sunday (0 when using getDay()) to 7 to make it easier to work with.
            firstDayOfMonth = firstDayOfMonth === 0 ? 7 : firstDayOfMonth;

            if (1 < firstDayOfMonth) {
                arrayOfDays = Array(firstDayOfMonth - 1).fill(false, 0).concat(arrayOfDays);
            }

            arrayOfDays.forEach(date => {
                var dateElement = document.createElement(date ? this.calendarDayElementType : 'span');
                var Date = date.toString().split(' ')[2];

                var dateIsTheCurrentValue = this.value.toString() === date.toString();
                if (dateIsTheCurrentValue) this.activeDateElement = dateElement;

                var dateIsBetweenAllowedRange = (this.min || this.max) && (date.toString() !== this.today
                    .toString() && (date < this.min || date > this.max))
                if (dateIsBetweenAllowedRange) {
                    dateElement.classList.add('disabled');
                } else {
                    dateElement.tabIndex = 0;
                    dateElement.value = date;
                }

                dateElement.textContent = date ? Date : '';
                this.calendarGrid.appendChild(dateElement);
            })

            this.calendarElement.appendChild(this.calendarGrid);
            this.activeDateElement.classList.add('selected');
        }

        /**
         * @description Updates the core-values for the calendar based on the new month and year
         * given by the navigation. Also updates the UI with the new values.
         */
        CalendarPicker.prototype._updateCalendar = function() {
            this.date = new Date(this.year, this.month);

            this._setDateText();

            this.day = this.date.getDay();
            this.month = this.date.getMonth();
            this.year = this.date.getFullYear();
            this._toggleNavigationButtons();

            // Cannot use arrow-functions for IE support :(
            var that = this;
            window.requestAnimationFrame(function() {
                that.calendarHeaderTitle.textContent = that.listOfAllMonthsAsText[that.month] + ' - ' + that
                    .year;
                that._insertDaysIntoGrid();
            })
        }

        /**
         * @param {Function} callback
         * @description A "listener" that lets the user do something everytime the value changes.
         */
        CalendarPicker.prototype.onValueChange = function(callback) {
            if (this.callback) return this.callback(this.value);
            this.callback = callback;
        }
        console.log(this.value);
    </script>
    <script>
        const nextYear = new Date().getFullYear() + 1;
        const myCalender = new CalendarPicker('#test', {
            // If max < min or min > max then the only available day will be today.
            min: new Date(),
            max: new Date(nextYear, 10), // NOTE: new Date(nextYear, 10) is "Nov 01 <nextYear>"
            locale: 'en-US', // Can be any locale or language code supported by Intl.DateTimeFormat, defaults to 'en-US'
            showShortWeekdays: true // Can be used to fit calendar onto smaller (mobile) screens, defaults to false
        });

        const currentDateElement = document.getElementById('current-date');
        currentDateElement.textContent = myCalender.value;

        const currentDayElement = document.getElementById('current-day');
        currentDayElement.textContent = myCalender.value.getDay();

        const currentToDateString = document.getElementById('current-datestring');
        currentToDateString.textContent = myCalender.value.toDateString();

        myCalender.onValueChange((currentValue) => {
            currentDateElement.textContent = currentValue;
            currentDayElement.textContent = currentValue.getDay();
            currentToDateString.textContent = currentValue.toDateString();

            console.log(`The current value of the calendar is: ${currentValue}`);
        });
    </script> --}}
    @livewireScripts
</body>

</html>
