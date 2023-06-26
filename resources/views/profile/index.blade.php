@extends('layouts.theme')
@section('menu-active-profile','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

            <div class="page-content header-clear-small">

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
                            <h1 class="font-700">ณัฐพงศ์ เครือเทศ</h1>

                            <p class="font-11 mt-2 mb-2"><b>ตำแหน่ง:</b> จพ.สาธารณสุขปฏิบัติงาน</p>
                            <p class="font-11 mb-0"><b>Email:</b> email</p>
                            <p class="font-11 mb-0"><b>โทรศัพท์:</b> tel</p>
                        </div>
                        {{-- <img id="pictureUrl" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
                        <img src="images/pictures/0t.jpg" width="115" class="rounded-circle mt-3 shadow-xl preload-img">
                    </div>

                    <div class="divider mt-4 mb-4"></div>

                    <div class="row mr-2 ml-2 mb-0">
<h1>Profile</h1>
                    </div>
                </div>

            </div>

@endsection

@section('footer_script')



@endsection
