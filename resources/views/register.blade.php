@extends('layouts.theme')
@section('menu-active-register','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">
        <div class="content mb-0">
            <h1 class="text-center font-900 font-40 text-uppercase mb-0">ลงทะเบียน</h1>
            <p class="text-center color-highlight font-11">คุณยังไม่ได้ลงทะเบียน กรุณาลงทะเบียนก่อนใช้งาน</p>

        <form method="post" action="{{ route('sessionregister.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-user color-theme"></i>
                <span>เลขบัตรประชาชน</span>
                <em>(required)</em>
                <input type="number" name="cid" placeholder="ตรวจสอบเลขบัตรประชาชน" required autofocus>
                <input type="hidden" name="lineid" value="{{ $userid ?? '' }}">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-lock color-theme"></i>
                <span>วัน-เดือน-ปีเกิด</span>
                <em>(required)</em>
                <input type="number" name="password" placeholder="ววดดปปปป (ปี พ.ศ.) 31122530" required>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-phone color-theme"></i>
                <span>Telephone</span>
                <em>(required)</em>
                <input type="number" name="tel" placeholder="เบอร์โทรศัพท์" required>
            </div>
            <div class="input-style has-icon input-style-1 input-required">
                <i class="input-icon fa fa-at color-theme"></i>
                <span>Email</span>
                <em>(required)</em>
                <input type="email" name="email" placeholder="Email" value="{{ $useremail }}" required>
                {{-- <input type="hidden" name="email" value="{{ $useremail }}"> --}}
            </div>
<button type="submit" class="btn scale-box btn-m mt-3 btn-center-l rounded-l shadow-xl bg-green1-dark font-800 text-white  text-uppercase">ลงทะเบียน</button>
            <!--<button type="submit" class="btn btn-m btn-full rounded-s shadow-l bg-green1-dark text-uppercase font-900">ลงทะเบียน</button>-->
        </form>

            <div class="clear"><br></div>

        </div>
    </div>

    {{-- <div class="footer card card-style">
        <a href="#" class="footer-title"><span class="color-highlight">Smart Hospital</span></a>
        <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> by GHOST</span><br>
        <div class="text-center mb-3">
            <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
            <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red2-dark"><i class="fa fa-share-alt"></i></a>
            <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark1-light"><i class="fa fa-angle-up"></i></a>
        </div>
        <p class="footer-copyright">Copyright &copy; <span id="copyright-year">2020</span>. All Rights Reserved.</p>
        <div class="clear"><br></div>
    </div>     --}}
</div>

@endsection

@section('footer_script')


@endsection
