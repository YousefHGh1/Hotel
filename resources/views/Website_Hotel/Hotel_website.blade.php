@extends('Website_Hotel.layout.mainmaster')

@section('title')
    {{ __('Nycondos Home Page Two') }}
@endsection

@section('css')
    <style>
        .custom-style {
            list-style: none;
            padding: 0;
        }

        .custom-style li {
            margin-bottom: 20px;
        }

        .custom-style label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .calender-input-box input[type="date"],
        .calender-input-box input[type="number"] {
            width: 100%;
            padding: 3px;
            border: 0px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;

        }

        .reserve-block {
            margin-top: 20px;
        }


        .reserve-block button {
            background-color: #ccc;
            color: #000000 !important;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
@endsection


@section('content')
    <!-- Main content -->

    <!--====== BANNER PART START ======-->
    <section class="banner-area banner-style-two" id="bannerSlider">
        @forelse ($sections as $section)
            @if ($section->category_id === 1)
                <div class="single-banner d-flex align-items-center justify-content-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="banner-content text-center">
                                    <span class="promo-tag" data-animation="fadeInDown"
                                        data-delay=".6s">{{ $section->name }}</span>
                                    <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">
                                        {{ $section->description }}
                                    </h1>
                                    <ul>
                                        <li data-animation="fadeInUp" data-delay="1.1s">
                                            <a class="main-btn btn-filled" href="#">take a tour</a>
                                        </li>
                                        <li data-animation="fadeInUp" data-delay="1.3s">
                                            <a class="main-btn btn-border" href="#">Learn More</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner bg -->
                    <div class="banner-bg" style="background-image: url({{ asset('storage/' . $section->image) }});">
                    </div>
                    <div class="banner-overly"></div>
                </div>
            @endif
        @empty
            <div class="single-banner d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-content text-center">
                                <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">Landhaus
                                    Bergzeit</span>
                                <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">Erholsamer Urlaub in
                                    Filzmoos
                                </h1>
                                <ul>
                                    <li data-animation="fadeInUp" data-delay="1.1s">
                                        <a class="main-btn btn-filled" href="#">take a tour</a>
                                    </li>
                                    <li data-animation="fadeInUp" data-delay="1.3s">
                                        <a class="main-btn btn-border" href="#">Learn More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner bg -->
                <div class="banner-bg" style="background-image: url({{ asset('WebsiteHotel/assets/img/banner/05.jpg') }});">
                </div>
                <div class="banner-overly"></div>
            </div>
        @endforelse
    </section>
    <!--====== BANNER PART ENDS ======-->

    <!--====== Book Room Style2 START ======-->
    <section class="book-room-style2 custom-media">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    @forelse ($sections as $section)
                        @if ($section->category_id === 2)
                            <div class="book-room-content">
                                <h3 class="mb-15">{{ $section->name }}</h3>
                                <p>{{ $section->description }}</p>
                                <a href="{{ route('contact') }}">
                                    <i class="fal fa-long-arrow-right"></i>
                                    mehr dazu!
                                </a>
                            </div>
                        @endif
                    @empty
                        <div class="book-room-content">
                            <h3 class="mb-15">Appartements in Filzmoos</h3>
                            <p>Das gemütliche Haus Bergzeit befindet sich in ruhiger, waldreicher Umgebung direkt an der
                                Talstation des Geierbergliftes, der mit der Skischaukel Filzmoos verbunden ist, sowie an der
                                Langlaufloipe und dem Wanderweg Filzmoos-Neuberg.</p>
                            <a href="{{ route('contact') }}">
                                <i class="fal fa-long-arrow-right"></i>
                                mehr dazu!
                            </a>
                        </div>
                    @endforelse
                </div>
                <div class="col-xl-6 mobile-none">
                    <div class="calender-box">
                        <form method="GET" action="{{ route('booking') }}">
                            <ul class="custom-style">
                                <li>
                                    <label>Anreisedatum</label>
                                    <div class="calender-input-box">
                                        <input type="date" name="anreisedatum" id="anreisedatum">
                                    </div>
                                </li>
                                <li>
                                    <label>Abreisedatum</label>
                                    <div class="calender-input-box">
                                        <input type="date" name="abreisedatum" id="abreisedatum">
                                    </div>
                                </li>
                                <li>
                                    <label>Erwachsene</label>
                                    <div class="calender-input-box">
                                        <input type="number" name="erwachsene">
                                    </div>
                                </li>
                                <li>
                                    <label>Kinder</label>
                                    <div class="calender-input-box">
                                        <input type="number" name="kinder">
                                    </div>
                                </li>
                            </ul>
                            <p class="reserve-block text-white">
                                <span>UNVERBINDLICHE ANFRAGE</span>
                                <button type="submit" class="text-white">
                                    <i class="fal fa-long-arrow-right"></i>
                                    Anfrage senden
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Book Room Style2 END ======-->

    <!--======  START Hotel Intro ======-->
    <section class="condos-overlay-sec pt-115 pb-155">
        <div class="container-fluid">
            <div class="section-title text-center mb-50">
                <span class="title-tag"> Landhaus Bergzeit </span>
                <h2>Appartements in Filzmoos</h2>
            </div>

            <div class="row team-loop offers-slider">
                @forelse ($sections as $section)
                    @if ($section->category_id === 3)
                        <div class="col-lg-3 col-md-6">
                            <div class="condo-item hotel-intro"
                                style="background-image: url({{ asset('storage/' . $section->image) }});">
                                <div class="title">
                                    <div class="icon">
                                        <i class="flaticon-team"></i>
                                    </div>
                                    <h4 class="text-white">{{ $section->name }}</h4>
                                    <div class="display-on-hover">
                                        <p class="text-white">{{ $section->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-lg-12 col-md-12">
                        <div class="condo-item hotel-intro"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/we-offer/01.jpg') }});">
                            <div class="title">
                                <div class="icon">
                                    <i class="flaticon-team"></i>
                                </div>
                                <h4 class="text-white">Strong Team</h4>
                                <div class="display-on-hover">
                                    <p class="text-white">You have a family or Party Reunion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse



            </div>
        </div>
    </section>
    <!--======  END Hotel Intro ======-->

    <!--====== BOOKING FORM START ======-->
    <div class="booking-form overlapped">
        <div class="container">
            <div class="booking-form-inner">
                <form method="GET" action="{{ route('booking') }}">
                    <div class="row align-items-end">
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <label for="arrival-date">Anreisedatum</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="date" placeholder="24th march 2020" name="arrival_date">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <label for="departure-date">Abreisedatum</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="date" placeholder="30th march 2020" name="departure_date">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <label for="guests">Gäste</label>
                                <select name="erwachsene" id="guests">
                                    <option value="" disabled selected>erwachsene</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="8">8</option>
                                </select>
                                <select name="kinder" id="guests1">
                                    <option value="" disabled selected>kinder</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <button type="submit">Anfrage senden</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====== BOOKING FORM END ======-->

    <!--====== VIDEO WRAP START ======-->
    @forelse ($viedos as $viedo)
        <div class="video-wrap full-section" style="background-image: url({{ asset('storage/' . $viedo->image) }});">
            <a href="{{ $viedo->link }}" class="popup-video wow fadeInDown" data-wow-delay=".3s">
                <img src="{{ asset('WebsiteHotel/assets/img/icon/07.png') }}" alt="Icon">
            </a>
        </div>
    @empty
        <div class="video-wrap full-section"
            style="background-image: url({{ asset('WebsiteHotel/assets/img/appartment-slider/06.jpg') }});">
            <a href="https://motiv-x.net/tours/20/02/Lieblingsplatz" class="popup-video wow fadeInDown"
                data-wow-delay=".3s">
                <img src="{{ asset('WebsiteHotel/assets/img/icon/07.png') }}" alt="Icon">
            </a>
        </div>
    @endforelse
    <!--====== VIDEO WRAP END ======-->


    <!--====== CORE FEATURES START ======-->
    <section class="core-feature-section bg-white pt-115 pb-115">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span class="title-tag"> Filzmoos </span>
                <h2>Urlaub in Filzmoos</h2>
            </div>
            <!-- Featre Loop -->
            <div class="row features-loop">
                @forelse ($sections as $section)
                    @if ($section->category_id === 4)
                        <div class="col-lg-4 col-sm-6 order-{{ $loop->index - $section->category_id }}">

                            <div class="feature-box with-hover-img wow fadeInLeft" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="flaticon-rating"></i>
                                </div>
                                <h3><a href="#">{{ $section->name }}</a></h3>
                                <p>
                                    {{ $section->description }}
                                </p>
                                <span class="count">{{ $loop->index - 2 }}</span>
                                @if ($loop->index % 2 != 0)
                                    <div class="hover-img"
                                        style="background-image: url({{ asset('storage/' . $section->image) }});">
                                    </div>
                                @endif


                            </div>
                        </div>
                    @endif

                @empty
                    <!-- Feature Loop -->
                    <div class="row features-loop">
                        <div class="col-lg-4 col-sm-6 order-1">
                            <div class="feature-box with-hover-img wow fadeInLeft" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="flaticon-rating"></i>
                                </div>
                                <h3><a href="#">Have High Rating</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna..
                                </p>
                                <span class="count">01</span>
                                <div class="hover-img"
                                    style="background-image: url({{ asset('WebsiteHotel/assets/img/feature/01.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 order-2">
                            <div class="feature-box wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <h3><a href="#">Quiet Hours</a></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna..
                                </p>
                                <span class="count">02</span>
                            </div>
                        </div>

                    </div>
                @endforelse
            </div>

        </div>
    </section>
    <!--====== CORE FEATURES END ======-->

    <!--====== ROOM SLIDER START ======-->
    <section class="room-slider">

        <div class="container-fluid p-0">
            <div class="row rooms-slider-one">
                @forelse ($sections as $section)
                    @if ($section->category_id === 5)
                        <div class="col">
                            <div class="slider-img"
                                style="background-image: url({{ asset('storage/' . $section->image) }});">
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
        <div class="rooms-content-wrap">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-xl-4 col-lg-5 col-sm-8">
                        <div class="room-content-box">
                            <div class="slider-count"></div>
                            <div class="slider-count-big"></div>
                            <div class="room-content-slider">
                                @forelse ($sections as $section)
                                    @if ($section->category_id === 5)
                                        <div class="single-content">
                                            <div class="icon">
                                                <i class="flaticon-hotel"></i>
                                            </div>
                                            <h3><a href="#">{{$section->name}}</a></h3>
                                            <p>{{$section->description}}</p>
                                        </div>
                                    @endif
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="container-fluid p-0">
                <div class="row rooms-slider-one">
                    <div class="col">
                        <div class="slider-img"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/room-slider/01.jpg') }});">
                        </div>
                    </div>
                    <div class="col">
                        <div class="slider-img"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/room-slider/02.jpg') }});">
                        </div>
                    </div>
                    <div class="col">
                        <div class="slider-img"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/room-slider/03.jpg') }});">
                        </div>
                    </div>
                    <div class="col">
                        <div class="slider-img"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/room-slider/04.jpg') }});">
                        </div>
                    </div>
                    <div class="col">
                        <div class="slider-img"
                            style="background-image: url({{ asset('WebsiteHotel/assets/img/room-slider/05.jpg') }});">
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-content-wrap">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-xl-4 col-lg-5 col-sm-8">
                            <div class="room-content-box">
                                <div class="slider-count"></div>
                                <div class="slider-count-big"></div>
                                <div class="room-content-slider">
                                    <div class="single-content">
                                        <div class="icon">
                                            <i class="flaticon-hotel"></i>
                                        </div>
                                        <h3><a href="#">Luxury Apartment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna.</p>
                                    </div>
                                    <div class="single-content">
                                        <div class="icon">
                                            <i class="flaticon-hotel"></i>
                                        </div>
                                        <h3><a href="#">Luxury Apartment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna.</p>
                                    </div>
                                    <div class="single-content">
                                        <div class="icon">
                                            <i class="flaticon-hotel"></i>
                                        </div>
                                        <h3><a href="#">Luxury Apartment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna.</p>
                                    </div>
                                    <div class="single-content">
                                        <div class="icon">
                                            <i class="flaticon-hotel"></i>
                                        </div>
                                        <h3><a href="#">Luxury Apartment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna.</p>
                                    </div>
                                    <div class="single-content">
                                        <div class="icon">
                                            <i class="flaticon-hotel"></i>
                                        </div>
                                        <h3><a href="#">Luxury Apartment</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


    </section>
    <!--====== ROOM SLIDER END ======-->



    <!--====== LATEST NEWS START ======-->
    <section class="latest-news pt-115 pb-115">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title">
                        <span class="title-tag">Blog</span>
                        <h2>{{ __('Activity') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                    <div class="latest-post-arrow arrow-style text-right">

                    </div>
                </div>
            </div>
            <!-- Latest post loop -->
            <div class="row latest-post-slider mt-80">

                @forelse ($sections as $section)
                    @if ($section->category_id === 6)
                        <div class="col-lg-4">
                            <div class="latest-post-box">
                                <div class="post-img"
                                    style="background-image: url({{ asset('storage/' . $section->image) }});">
                                </div>
                                <div class="post-desc">

                                    <h4><a href="#">{{ $section->name }}</a></h4>
                                    <p>
                                        {{ $section->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-lg-12">
                        <div class="latest-post-box">
                            <div class="post-img"
                                style="background-image: url({{ asset('WebsiteHotel/assets/img/latest-post/01.jpg') }});">
                            </div>
                            <div class="post-desc">

                                <h4><a href="#">Each of our 8 double rooms has its own distinct.</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!--====== LATEST NEWS END ======-->
    <!--====== INSTAGRAM FEED PART START ======-->
    <div class="instagram-feed-section">
        <div class="container-fluid p-0">
            <div class="instagram-slider">
                @forelse($images as $image)
                    <div class="image">
                        <a herf="{{ $image['permalink'] }}" target="_blank" alt="{{ $image['permalink'] }}"
                            class="insta-popup">
                            <img src="{{ $image['media_url'] }}" alt="{{ $image['permalink'] }}" alt="instagram-feed">
                        </a>
                    </div>
                @empty
                    <div class="image">
                        <a href="{{ asset('WebsiteHotel/assets/img/instagram/01.jpg') }}" class="insta-popup">
                            <img src="{{ asset('WebsiteHotel/assets/img/instagram/01.jpg') }}" alt="instagram-feed">
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!--====== INSTAGRAM FEED PART END ======-->

    <!-- /.content -->
@endsection

@section('scripts')
@endsection
