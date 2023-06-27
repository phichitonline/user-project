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
        <div class="content">
            <div class="list-group list-custom-large mr-2">
                @forelse ($slip_list as $data)
                <a data-menu="menu-task-item" href="#" class="no-border">
                    <i class="fa fa-mobile-alt rounded-xl bg-fade-blue2-dark color-blue2-dark font-12"></i>
                    <span>{{ $data->datetran }} {{ $data->income }} {{ $data->expense }}</span>
                    {{-- <strong>More Poweful Features</strong> --}}
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

<!--Menu Task Box-->
<div id="menu-task-item" class="menu menu-box-bottom menu-box-detached rounded-l" data-menu-height="220" data-menu-effect="menu-over">
    <div class="content">
        <h5 class="bold">จัดการ</h5>
        <p class="mb-0">
            เลือกแสดงรายการ หรือดาวน์โหลดไฟล์ PDF
        </p>
        <div class="divider mt-2"></div>
        <div class="row">
            <div class="col-6">
                <a href="#" class="close-menu btn btn-s rounded-s shadow-l btn-full text-uppercase font-900 bg-green1-dark">แสดงรายการ</a>
            </div>
            <div class="col-6">
                <a href="#" class="close-menu btn btn-s rounded-s shadow-l btn-full text-uppercase font-900 bg-blue2-dark">Download PDF</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer_script')



@endsection
