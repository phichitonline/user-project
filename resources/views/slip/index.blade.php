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
        </div>

    </div>

</div>

    <!-- Recent Transactions Menus -->
    <div id="menu-transaction-1" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="480">
        <div class="menu-title"><h1>รายการรับจ่าย</h1><p class="color-highlight">14 มิ.ย.66 15.06 น.</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
        <div class="divider divider-margins mb-1 mt-3"></div>
        <div class="content mb-2">
            <table class="table table-borderless rounded-sm shadow-l" style="overflow: hidden;">
                <thead>
                    <tr class="bg-gray1-dark">
                        <th scope="col" class="color-theme text-center">รายการ</th>
                        <th scope="col" class="color-theme text-right">รายรับ</th>
                        <th scope="col" class="color-theme text-right">รายจ่าย</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">เงินเดือน</th>
                        <td class="color-green1-dark text-right">15,610.00</td>
                        <td class="color-red2-dark text-right"></td>
                    </tr>
                    <tr>
                        <th scope="row">ประกันสังคม</th>
                        <td class="color-green1-dark text-right"></td>
                        <td class="color-red2-dark text-right">750.00</td>
                    </tr>
                    <tr>
                        <th scope="row">ร้านค้าสวัสดิการ รพ.</th>
                        <td class="color-green1-dark text-right"></td>
                        <td class="color-red2-dark text-right">676.00</td>
                    </tr>
                    <tr>
                        <th scope="row">ฌกส.</th>
                        <td class="color-green1-dark text-right"></td>
                        <td class="color-red2-dark text-right">382.00</td>
                    </tr>
                    <tr>
                        <th scope="row">สหกรณ์ สสจ.</th>
                        <td class="color-green1-dark text-right"></td>
                        <td class="color-red2-dark text-right">2,050.00</td>
                    </tr>
                    <tr>
                        <th scope="row">ธนาคารออมสิน</th>
                        <td class="color-green1-dark"></td>
                        <td class="color-red2-dark text-right">3,584.00</td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="bg-gray1-dark">
                        <th scope="col" class="color-theme">คงเหลือ</th>
                        <th scope="col" class="color-theme"></th>
                        <th scope="col" class="color-blue2-dark">8,168.00</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="col-12"><a href="#" class="close-menu btn btn-full btn-m bg-blue2-dark rounded-sm text-uppercase font-800">Download PDF</a></div>

    </div>

@endsection

@section('footer_script')



@endsection
