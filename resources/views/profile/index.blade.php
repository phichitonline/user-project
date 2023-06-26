@extends('layouts.theme')
@section('menu-active-profile','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="header header-fixed header-logo-center bg-blue2-dark">
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

                    <div class="d-flex content mb-1">
                        <div class="flex-grow-1">
                            <h1 class="font-700">{{ $pname }}</h1>
                            <p class="font-11 mb-0"><b>Email:</b> {{ $email }}</p>
                            <p class="font-11 mb-0"><b>โทรศัพท์:</b> {{ $tel }}</p>

                            <p class="font-11 mb-0"><b>ตำแหน่ง:</b> {{ $entryposition }}</p>
                            <p class="font-11 mb-0"><b>Provider:</b> {{ $groupname }}</p>
                        </div>
                        {{-- <img id="pictureUrl" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
                        {{-- <img src="images/pictures/0t.jpg" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
                    </div>

                    {{-- <div class="divider mt-4 mb-4"></div>

                    <div class="d-flex content mb-1">
                        <h1>Profile</h1>
                    </div> --}}

                </div>

            </div>

@endsection

@section('footer_script')



@endsection
