@extends('layouts.theme')
@section('menu-active-slip','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">
        <div class="content mt-4 mb-0">
            <h1 class="text-center font-900 font-40 text-uppercase mb-0">Login</h1>

            <div class="input-style has-icon input-style-1 input-required pb-1">
                <i class="input-icon fa fa-user color-theme"></i>
                <span>เลขบัตรประชาชน</span>
                <em>(required)</em>
                <input name="cid" type="text" placeholder="เลขบัตรประชาชน">
            </div>
            <div class="input-style has-icon input-style-1 input-required pb-1">
                <i class="input-icon fa fa-lock color-theme"></i>
                <span>วันเดือนปีเกิด</span>
                <em>(required)</em>
                <input name="birthday" type="text" placeholder="วันเดือนปีเกิด">
            </div>

            <a href="#" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark text-uppercase font-900">Login</a>

        </div>

    </div>

</div>

@endsection

@section('footer_script')



@endsection
