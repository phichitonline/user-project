@extends('layouts.theme')
@section('menu-active-slip','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

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
                    <td class="color-green1-dark text-right"></td>
                    <td class="color-red2-dark text-right">3,584.00</td>
                </tr>
            </tbody>
            <thead>
                <tr class="bg-gray1-dark">
                    <th scope="col" class="color-theme">คงเหลือ</th>
                    <th scope="col" class="color-theme"></th>
                    <th scope="col" class="color-blue2-dark text-right">8,168.00</th>
                </tr>
            </thead>
        </table>
    </div>




@endsection

@section('footer_script')
