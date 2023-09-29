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
                <h2 class="page-title">Booking</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Booking</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->

    <!--====== booking PART START ======-->
    <section class="contact-part pt-115 pb-115">
        <div class="container">

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
                <form action="{{ route('Appartement.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" placeholder="Your full name" name="name"autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" placeholder="Enter email address" name="email"autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" placeholder="Add phone number" name="phone"autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs-filed input-group mb-30 custom-select-1">
                                <select name="Anrede" id="guests"autocomplete="off">
                                    <option value="" disabled selected>Anrede</option>
                                    <option value="male">Herr</option>
                                    <option value="female">Frau</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs-filed input-group mb-30 custom-select-1">
                                <select name="Adults" autocomplete="off">
                                    <option value="" disabled selected>Adults</option>
                                    @for ($i = 1; $i <= 7; $i++)
                                        <option value="{{ $i }}"
                                            {{ session('erwachsene') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs-filed input-group mb-30 custom-select-1">
                                <select name="Children" id="childNumber" autocomplete="off">
                                    <option value="" disabled selected>Children</option>
                                    @for ($i = 1; $i <= 7; $i++)
                                        <option value="{{ $i }}" {{ session('kinder') == $i ? 'selected' : '' }}>
                                            {{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs-filed input-group mb-30">
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="Arrival Date" name="arrival_date" id="arrival-date"
                                    autocomplete="off" value="{{ session('anreisedatum') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputs-filed input-group mb-30">
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="Departure Date" name="departure_date" autocomplete="off"
                                    id="departure-date" value="{{ session('abreisedatum') }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="inputs-filed input-group mb-30 custom-select-1">
                                <select name="room_id" multiple autocomplete="off">
                                    <option value="" disabled selected>{{ __('Rooms') }}</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group textarea mb-30">
                                <span class="icon"><i class="far fa-pen"></i></span>
                                <textarea placeholder="Enter messages" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Booking Now</button>
                        </div>
                    </div>
                    <div id="myModal" class="modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="modal-title h6">Please enter the ages of the children</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body custom-select-1">
                                    <div class="row" id="age_container">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Save</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== booking PART END ======-->

    <!-- /.content -->
@endsection

@section('scripts')
@endsection
