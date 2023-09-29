@extends('layout.master')

@section('title')
    {{ __('Hotel') }}
@endsection

@section('page_title')
    {{ __('controll_panel') }}
@endsection
@section('sub_main')
    {{ __('home') }}
@endsection
@section('sub_title')
    {{ __('Category') }}
@endsection

@section('css')
@endsection

@section('content')
    <div class=" container ">
        <!--begin::Advance Table Widget 3-->
        <div class="card card-custom gutter-b">
            <!--begin::Body-->
            <div class="card-body p-0 pl-1">
                <!--begin::Table-->
                <div class="table-responsive">
                    {{-- @can('index categorys') --}}

                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                        <thead>
                            <tr class="text-uppercase">

                                <th style="width: 150px">{{ __('name') }}</th>
                                <th style="width: 100px">{{ __('arrival_date') }}</th>
                                <th style="width: 100px">{{ __('departure_date') }}</th>
                                <th style="width: 150px">{{ __('email') }}</th>
                                <th style="width: 150px">{{ __('phone') }}</th>
                                <th style="width: 50px">{{ __('Anrede') }}</th>
                                <th style="width: 20px">{{ __('Adults') }}</th>
                                <th style="width: 20px">{{ __('Children') }}</th>
                                <th style="width: 80px">{{ __('room') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bookings as $booking)
                                <tr>
                                    <td class="pl-0 py-8">{{ $booking->name }}</td>
                                    <td class="pl-0 py-8">{{ $booking->arrival_date }}</td>
                                    <td class="pl-0 py-8">{{ $booking->departure_date }}</td>
                                    <td class="pl-0 py-8">{{ $booking->email }}</td>
                                    <td class="pl-0 py-8">{{ $booking->phone }}</td>
                                    <td class="pl-0 py-8">{{ $booking->Anrede }}</td>
                                    <td class="pl-0 py-8">{{ $booking->Adults }}</td>
                                    <td class="pl-0 py-8">{{ $booking->Children }}</td>
                                    <td class="pl-0 py-8">{{ $booking->room->name }}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td class="p-4" colspan="4">
                                        {{ __('no_records') }}</td>
                                </tr>
                            @endforelse{{-- --}}
                        </tbody>
                    </table>
                    {{-- {{ $categorys->links() }} --}}
                    {!! $bookings->withQueryString()->links('pagination::bootstrap-5') !!}
                    {{-- @endcan --}}
                </div>
                <!--end::Table-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Advance Table Widget 3-->
    </div>
@endsection

@section('scripts')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>

    <!--end::Page Scripts-->
@endsection
