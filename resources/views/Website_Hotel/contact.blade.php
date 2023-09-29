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
            <h2 class="page-title">Contact us</h2>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== CONTACT PART START ======-->
<section class="contact-part pt-115 pb-115">
    <div class="container">
        <!-- Contact Form -->
        <div class="contact-form">

            <div class="section-title text-center mb-50">
                <div class="mb-20">
                    <img src="https://www.meinlieblingsplatz.at/img/icons/blatt.svg" width="50" />
                </div>
                <span class="title-tag"> SOMMER- UND WINTERURLAUB IN "LANDHAUS BERGZEIT" IN FILZMOOS</span>
                <h3 class="mb-20">UNVERBINDLICHE ANFRAGE</h3>
                <span class="title-tag"> Verbringt traumhafte Tage in den Appartements "LANDHAUS BERGZEIT" in Filzmoos.
                    Gerne stellen wir ein individuelles Urlaubsangebot für euch zusammen!</span>
            </div>
            <form action="{{ route('contactForm.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-30">
                            <span class="icon"><i class="far fa-user"></i></span>
                            <input type="text" placeholder="Your full name" name="full_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-30">
                            <span class="icon"><i class="far fa-envelope"></i></span>
                            <input type="email" placeholder="Enter email address" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-30">
                            <span class="icon"><i class="far fa-phone"></i></span>
                            <input type="text" placeholder="Add phone number" name="phone_number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-30">
                            <span class="icon"><i class="far fa-book"></i></span>
                            <input type="text" placeholder="Select Subject" name="subject">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-group textarea mb-30">
                            <span class="icon"><i class="far fa-pen"></i></span>
                            <textarea placeholder="Enter messages" name="message"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="main-btn btn-filled">Get Free Quote</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Contact Mapts -->
        <div class="contact-maps mb-30" id="map"></div>

    </div>
</section>
<!--====== CONTACT PART END ======-->

<!-- /.content -->
@endsection

@section('scripts')
@endsection