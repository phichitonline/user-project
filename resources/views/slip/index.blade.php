@extends('layouts.theme')
@section('menu-active-slip','active-nav')
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
                    <div class="d-flex content mt-2 mb-2">
                        <h1><span class="color-highlight">Slip</span></h1>
                        @forelse ($slip_list as $data)
                            <br>{{ $data->datetran }} {{ $data->income }} {{ $data->expense }}
                        @empty
                            <h5>ไม่มีข้อมูล</h5>
                        @endforelse

                    </div>
                </div>


            </div>

@endsection

@section('footer_script')



@endsection
