@extends('layouts.theme')
@section('menu-active-home','active-nav')
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
                    <h1 class="font-700">{{ $pname }}</h1>

                    <p class="font-11 mt-2 mb-2"><b>ตำแหน่ง:</b> {{ $entryposition }}</p>
                    <p class="font-11 mb-0"><b>Email:</b> {{ $email }}</p>
                    <p class="font-11 mb-0"><b>โทรศัพท์:</b> {{ $tel }}</p>
                </div>
                <img class="preload-img img-fluid rounded-circle pl-3 pr-3" id="pictureUrl" width="115">
                {{-- <img id="pictureUrl" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
                {{-- <img src="images/pictures/0t.jpg" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
            </div>

            <div class="divider mt-4 mb-4"></div>

            <div class="row mr-2 ml-2 mb-0">
                <div class="col-6 text-center">
                    <a href="{{ route('profile') }}">
                        <i class="fa fa-address-book color-blue2-dark fa-3x"></i>
                        <h2 class="mt-3 mb-1">Profile</h2>
                        <p>ข้อมูลพนักงาน /เจ้าหน้าที่ของคุณ</p>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('slip') }}">
                        <i class="fa fa-print color-green1-dark fa-3x"></i>
                        <h2 class="mt-3 mb-1">Slip</h2>
                        <p>สลิปเงินเดือน รายรับรายจ่ายออนไลน์</p>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('expenses') }}">
                        <i class="fa fa-bold color-highlight fa-3x"></i>
                        <h2 class="mt-3 mb-1">Expenses</h2>
                        <p>ตรวจสอบค่าใช้จ่าย ค่าน้ำ ค่าไฟฟ้า และอื่นๆ</p>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{ route('timestamp') }}">
                        <i class="fa fa-clock color-red2-dark fa-3x"></i>
                        <h2 class="mt-3 mb-1">ลงเวลาทำงาน</h2>
                        <p>บันทึกการเข้าออกเวลาทำงาน</p>
                    </a>
                </div>
                <div class="col-6 text-center">
                    <a href="#">
                        <i class="fa fa-tasks color-blue2-dark fa-3x"></i>
                        <h2 class="mt-3 mb-1">บริการอื่นๆ</h2>
                        <p>บริการอื่นๆ ที่เกี่ยวกับเจ้าหน้าที่</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mt-0 mb-0">
                <div class="list-group list-custom-large">
                    <a href="#" data-toggle-theme data-trigger-switch="switch-4" class="border-0">
                        <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                        <span class="font-600">Dark Mode</span>
                        <strong>โหมดกลางคืน</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input data-toggle-theme-switch type="checkbox" class="ios-input" id="switch-4">
                            <label class="custom-control-label" for="switch-4"></label>
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer card card-style">
            <a href="#" class="footer-title"><span class="color-highlight">ศูนย์คอมพิวเตอร์</span></a>
            <p class="footer-text"><span>เต็มใจให้บริการ <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> ก้าวทันเทคโนโลยี</span>
            <div class="text-center mb-0">
                <a href="tel:0619921666" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
            </div>
            <p class="footer-links"><a href="http://www.tphcp.go.th" class="color-highlight">โรงพยาบาลสมเด็จพระยุพราชตะพานหิน</a></p>
            <div class="clear"></div>
        </div>

    </div>

@endsection

@section('footer_script')

<script>

    async function getUserProfile() {
        const profile = await liff.getProfile()
        document.getElementById("pictureUrl").src = profile.pictureUrl
    }

</script>

@endsection
