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
            <h2 class="page-title">Gallery</h2>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
<!--====== GALLERY START ======-->
<div class="gallery-wrappper pt-120 pb-120">
    <div class="container">
        <div class="gallery-loop">
            @forelse ($sections as $section)
            @if ($section->category_id === 9)
            <div class="single-gallery-image wow fadeInUp" data-wow-delay=".{{$loop->index}}s">
                <a href="{{ asset('storage/' . $section->image) }}" class="popup-image">
                    <img src="{{ asset('storage/' . $section->image) }}" alt="Images">
                </a>
            </div>
            @endif
            @empty
            <div class="single-gallery-image wow fadeInUp" data-wow-delay=".{{$loop->index}}s">
                <a href="{{ asset('WebsiteHotel/assets/img/gallery/01.jpg') }}" class="popup-image">
                    <img src="{{ asset('WebsiteHotel/assets/img/gallery/01.jpg') }}" alt="Images">
                </a>
            </div>
            @endforelse


        </div>
    </div>
</div>
<!--====== GALLERY END ======-->

<!-- /.content -->
@endsection

@section('scripts')
@endsection