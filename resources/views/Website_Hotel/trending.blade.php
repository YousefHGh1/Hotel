@extends('Website_Hotel.layout.submaster')

@section('title')
{{ __('Nycondos Home Page Two') }}
@endsection

@section('css')
@endsection


@section('content')
<!-- Main content -->
<!--====== BREADCRUMB PART START ======-->
<section class="breadcrumb-area" style="background-image: url({{ asset('assets/img/bg/04.jpg') }});">
    <div class="container">
        <div class="breadcrumb-text">
            <span>The ultimate luxury</span>
            <h2 class="page-title">Our Offers</h2>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li class="active">Offers</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<section class="offers-area pt-120 pb-60">
    <div class="container">
        <div class="offer-boxes-loop">
            @forelse ($sections as $section)
            @if ($section->category_id === 7)
            <div class="offer-box">
                <div class="thumb">
                    <img src="{{ asset('storage/' . $section->image) }}" alt="images">
                </div>
                <div class="offer-desc">
                    <div class="title-wrap">
                        <div class="title">
                            <span class="room-cat">double bed</span>
                            <h2>{{$section->name}}</h2>
                        </div>
                        <div class="price">
                            $345<span>/Month</span>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="offer-text">
                                <p>
                                    {{$section->decription}}
                                </p>
                                <a href="{{route('booking')}}" class="main-btn btn-filled">Book now</a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="offer-feature">
                                <ul>
                                    <li><i class="fal fa-bath"></i> Air conditioner</li>
                                    <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                    <li><i class="fal fa-cut"></i>Breakfast</li>
                                    <li><i class="fal fa-guitar"></i>Kitchen</li>
                                    <li><i class="fal fa-broom"></i>Cleaning</li>
                                    <li><i class="fal fa-shower"></i>Shower</li>
                                    <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                    <li><i class="fal fa-bed"></i>Single bed</li>
                                    <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                    <li><i class="fal fa-bus"></i>Towels</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <div class="offer-box">
                <div class="thumb">
                    <img src="{{ asset('WebsiteHotel/assets/img/offers/01.jpg') }}" alt="images">
                </div>
                <div class="offer-desc">
                    <div class="title-wrap">
                        <div class="title">
                            <span class="room-cat">double bed</span>
                            <h2>Luxury Double Bed</h2>
                        </div>
                        <div class="price">
                            $345<span>/Month</span>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <div class="offer-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur.
                                </p>
                                <a href="{{route('booking')}}" class="main-btn btn-filled">Book now</a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="offer-feature">
                                <ul>
                                    <li><i class="fal fa-bath"></i> Air conditioner</li>
                                    <li><i class="fal fa-wifi"></i>High speed WiFi</li>
                                    <li><i class="fal fa-cut"></i>Breakfast</li>
                                    <li><i class="fal fa-guitar"></i>Kitchen</li>
                                    <li><i class="fal fa-broom"></i>Cleaning</li>
                                    <li><i class="fal fa-shower"></i>Shower</li>
                                    <li><i class="fal fa-shopping-basket"></i>Grocery</li>
                                    <li><i class="fal fa-bed"></i>Single bed</li>
                                    <li><i class="fal fa-shopping-cart"></i>shop near</li>
                                    <li><i class="fal fa-bus"></i>Towels</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse

        </div>
    </div>
</section>
<!--====== FEATURE ROOM START ======-->
<section class="feature-room-section with-bg pt-155 pb-115"
    style="background-image: url({{ asset('assets/img/bg/06.jpg') }});">
    <div class="container">
        <div class="section-title white-color text-center">
            <span class="title-tag">popular list</span>
            <h2>Popular Apartments</h2>
        </div>
        <!-- Apartment Looop -->
        <div class="row room-gird-loop justify-content-center mt-30">
            @forelse ($sections as $section)
            @if ($section->category_id === 8)
            <div class="col-lg-4 col-sm-6">
                <div class="room-box mt-30">
                    <div class="room-img-wrap">
                        <div class="room-img" style="background-image: url({{ asset('storage/' . $section->image) }});">
                        </div>
                    </div>
                    <div class="room-desc">
                        <ul class="icons">
                            <li><i class="fal fa-bed"></i></li>
                            <li><i class="fal fa-wifi"></i></li>
                            <li><i class="fal fa-car"></i></li>
                            <li><i class="fal fa-coffee"></i></li>
                            <li><i class="fal fa-concierge-bell"></i></li>
                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                            <li><i class="fal fa-swimmer"></i></li>
                        </ul>
                        <h4 class="title"><a href="#">{{$section->name}}</a></h4>
                        <p>{{$section->decription}}</p>
                        <span class="price">$345/Month</span>
                        <a href="{{route('booking')}}" class="book-btn">Booking Now</a>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <div class="col-lg-4 col-sm-6">
                <div class="room-box mt-30">
                    <div class="room-img-wrap">
                        <div class="room-img" style="background-image: url({{ asset('assets/img/room/01.jpg') }});">
                        </div>
                    </div>
                    <div class="room-desc">
                        <ul class="icons">
                            <li><i class="fal fa-bed"></i></li>
                            <li><i class="fal fa-wifi"></i></li>
                            <li><i class="fal fa-car"></i></li>
                            <li><i class="fal fa-coffee"></i></li>
                            <li><i class="fal fa-concierge-bell"></i></li>
                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                            <li><i class="fal fa-swimmer"></i></li>
                        </ul>
                        <h4 class="title"><a href="#">Minimal Duplex Apartment</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <span class="price">$345/Month</span>
                        <a href="{{route('booking')}}" class="book-btn">Booking Now</a>
                    </div>
                </div>
            </div>
            @endforelse
        

        </div>
    </div>
</section>
<!--====== FEATURE ROOM END ======-->

<!-- /.content -->
@endsection

@section('scripts')
@endsection