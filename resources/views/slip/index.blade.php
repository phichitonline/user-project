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

                    <div class="card-header bg-green1-dark">
                        <h2 class="color-white pt-2">Compact ToDo List</h2>
                        <p class="color-white opacity-70 mb-3">
                            Only keep the task visible. Don't include any text or anyother info under it to keep things focused.
                        </p>
                    </div>
                    <div class="content">
                        <div class="todo-list list-group list-custom-small ml-2">
                            <a href="#">
                                <i class="fa fa-check rounded-l bg-fade-green1-dark color-green1-dark font-12"></i>
                                <span>Create New Page</span>
                                <i class="todo-icon fa fa-check-square color-green1-dark font-16"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-cog rounded-l bg-fade-magenta1-dark color-magenta1-dark font-12"></i>
                                <span>Upgade Components</span>
                                <i class="todo-icon far fa-square font-16"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-bolt rounded-l bg-fade-yellow1-dark color-yellow1-dark font-12"></i>
                                <span>Load Faster</span>
                                <i class="todo-icon far fa-square font-16"></i>
                            </a>
                            <a href="#" class="border-0">
                                <i class="fa fa-mobile-alt rounded-l bg-fade-blue2-dark color-blue2-dark font-12"></i>
                                <span>Release PWA Version</span>
                                <i class="todo-icon far fa-square font-16"></i>
                            </a>
                        </div>
                    </div>


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
