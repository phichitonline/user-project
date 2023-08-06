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
                @forelse ($slip_list2 as $data)
                <a href="#" data-menu="menu-transaction-1">
                    <i class="fa fa-list color-brown1-dark"></i>
                    {{-- <span>{{ DateThaiShortYY($data->datetran) }} {{ $data->income }} {{ $data->expense }}</span> --}}
                    <span>{{ DateThaiShortYY($data->s_date) }} {{ TimeThai($data->s_time) }} น.: {{ number_format($data->totals,2,".",",") }} บาท</span>
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
        <div class="menu-title"><h1>รายการรับจ่าย</h1><p class="color-highlight">วันที่ 27 มิถุนายน 2566</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-1 mt-3"></div>
        <div class="content mb-2">
            <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
                <thead>
                    <tr class="bg-gray1-dark">
                        <th scope="col" class="color-theme">Brand</th>
                        <th scope="col" class="color-theme">Device</th>
                        <th scope="col" class="color-theme">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Apple</th>
                        <td class="color-green1-dark">$500</td>
                        <td><i class="fa fa-arrow-up rotate-45 color-green1-dark"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Android</th>
                        <td class="color-yellow1-dark">$400</td>
                        <td><i class="fa fa-arrow-right rotate-45 color-yellow1-dark"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Nope</th>
                        <td class="color-red2-dark">$300</td>
                        <td><i class="fa fa-arrow-right rotate-90 color-red2-dark"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-blue2-dark rounded-sm text-uppercase font-800">Download PDF</a></div>

    </div>

@endsection

@section('footer_script')



@endsection
