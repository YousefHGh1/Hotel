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
        <div class="card-body pt-0 pb-3">
            <!--begin::Table-->
            <div class="table-responsive">
                {{-- @can('index categorys') --}}

                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                        <tr class="text-uppercase">
                            <th style="min-width: 100px">{{ __('full_name') }}</th>
                            <th style="min-width: 250px">{{ __('email') }}</th>
                            <th style="min-width: 250px">{{ __('phone_number') }}</th>
                            <th style="min-width: 250px">{{ __('subject') }}</th>
                            <th style="min-width: 250px">{{ __('message') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                        <tr>
                            <td class="pl-0 py-8">{{ $contact->full_name }}</td>
                            <td class="pl-0 py-8">{{ $contact->email }}</td>
                            <td class="pl-0 py-8">{{ $contact->phone_number }}</td>
                            <td class="pl-0 py-8">{{ $contact->subject }}</td>
                            <td class="pl-0 py-8">{{ $contact->message }}</td>
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
                {!! $contacts->withQueryString()->links('pagination::bootstrap-5') !!}
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