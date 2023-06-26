@extends('layouts.theme')
@section('menu-active-expenses','active-nav')
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
                        <h1><span class="color-highlight">Expenses</span></h1>

                    </div>
                </div>


            </div>

@endsection

@section('footer_script')



@endsection
