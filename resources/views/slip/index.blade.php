@extends('layouts.theme')
@section('menu-active-slip','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">

        <div class="card-header bg-green1-dark">
            <h2 class="color-white pt-2">{{ $moduletitle }}</h2>
        </div>
        <div class="content my-0">
            <div class="list-group list-custom-small">
                @forelse ($slip_list as $data)
                <a href="#" data-menu="menu-transaction-1">
                    <i class="fa fa-list color-brown1-dark"></i>
                    <span>{{ $data->datetran }} {{ $data->income }} {{ $data->expense }}</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                @empty
                    <span>ไม่มีข้อมูล</span>
                @endforelse
            </div>

            {{-- <div class="todo-list list-group list-custom-small ml-2">
                @forelse ($slip_list as $data)
                <a href="#" class="border-0">
                    <i class="fa fa-mobile-alt rounded-l bg-fade-blue2-dark color-blue2-dark font-12"></i>
                    <span>{{ $data->datetran }} {{ $data->income }} {{ $data->expense }}</span>
                    <i class="todo-icon far fa-square font-16"></i>
                </a>
                @empty
                    <span>ไม่มีข้อมูล</span>
                @endforelse
            </div> --}}
        </div>

    </div>

</div>

    <!-- Recent Transactions Menus -->
    <div id="menu-transaction-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="480">
        <div class="menu-title"><h1>Payment Sent</h1><p class="color-highlight">Transaction Details for Payment</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-1 mt-3"></div>
        <div class="content">
            <div class="row mb-0">
                <div class="col-3">
                    <img src="images/pictures/faces/1s.png" width="80" class="rounded-xl">
                </div>
                <div class="col-9 pl-4">
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">To</p></div>
                        <div class="ml-auto"><p>John Doe</p></div>
                    </div>
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">From</p></div>
                        <div class="ml-auto"><p> Card **** 9431</p></div>
                    </div>
                    <div class="d-flex">
                        <div><p class="font-700 color-theme">Date</p></div>
                        <div class="ml-auto"><p>15th July 2025</p></div>
                    </div>
                </div>
            </div>
            <div class="divider mt-3 mb-3"></div>
            <div class="row mb-0">
                <div class="col-6"><h4 class="font-14">Type</h4></div>
                <div class="col-6"><h4 class="font-14 text-right">Payment Sent</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                <div class="col-6"><h4 class="font-14 mt-1">Amount</h4></div>
                <div class="col-6"><h4 class="font-14 text-right mt-1">$530.24</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                <div class="col-6"><h4 class="font-14 mt-1">Transaction ID</h4></div>
                <div class="col-6"><h4 class="font-14 text-right mt-1">#123-456-165</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-2"></div>
                <div class="col-6"><h4 class="font-14 mt-1">Status</h4></div>
                <div class="col-6"><h4 class="font-14 text-right mt-1 color-green1-dark">Completed</h4></div>
                <div class="divider divider-margins w-100 mt-2 mb-3"></div>
                <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-blue2-dark rounded-sm text-uppercase font-800">Download PDF</a></div>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')



@endsection
