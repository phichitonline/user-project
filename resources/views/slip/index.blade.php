@extends('layouts.theme')
@section('menu-active-slip','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="header header-fixed header-logo-center bg-green2-dark">
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

                    <div class="card card-style">
                        <div class="card-header bg-red2-dark">
                            <h2 class="color-white pt-2">Ultra Compact ToDo List</h2>
                            <p class="color-white opacity-70 mb-2">
                                Keep only the bare minimum. The list and the checkbox.
                            </p>
                        </div>
                        <div class="content mb-0">
                            <div class="todo-list list-group list-custom-small">
                                <a href="#">
                                    <span>Create New Page</span>
                                    <i class="todo-icon fa fa-check-square color-green1-dark font-16"></i>
                                </a>
                                <a href="#">
                                    <span>Upgade Components</span>
                                    <i class="todo-icon far fa-square font-16"></i>
                                </a>
                                <a href="#">
                                    <span>Load Faster</span>
                                    <i class="todo-icon far fa-square font-16"></i>
                                </a>
                                <a href="#" class="border-0">
                                    <span>Release PWA Version</span>
                                    <i class="todo-icon far fa-square font-16"></i>
                                </a>
                            </div>
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
