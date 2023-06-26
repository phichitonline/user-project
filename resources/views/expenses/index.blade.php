@extends('layouts.theme')
@section('menu-active-expenses','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="header header-fixed header-logo-center bg-red2-dark">
    <a href="#" class="header-title color-white">{{ $moduletitle }}</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-times"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
</div>

    <div class="page-content header-clear-large">

            @if (session('session-alert'))
                <div class="footer card card-style">
                    <a href="#" class="footer-title"><span class="color-highlight">{{ session('session-alert') }}</span></a>
                    <div class="clear"><br></div>
                </div><br>
            @else

            @endif

                <div class="card card-style">
                    <div class="d-flex content mt-2 mb-2">
                        <h1><span class="color-highlight">Expenses</span></h1>

                    </div>
                </div>


            </div>

@endsection

@section('footer_script')



@endsection
