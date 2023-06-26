@extends('layouts.theme')
@section('menu-active-profile','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')


<div class="page-content header-clear-small">

    <div class="card card-style">

        <div class="card-header bg-blue1-dark">
            <h2 class="color-white pt-2">{{ $moduletitle }}</h2>
        </div>
        <div class="content">
            <div class="d-flex content mb-1">
                <div class="flex-grow-1">
                    <h1 class="font-700">{{ $pname }}</h1>
                    <p class="font-11 mb-0"><b>Email:</b> {{ $email }}</p>
                    <p class="font-11 mb-0"><b>โทรศัพท์:</b> {{ $tel }}</p>

                    <p class="font-11 mb-0"><b>ตำแหน่ง:</b> {{ $entryposition }}</p>
                    <p class="font-11 mb-0"><b>Provider:</b> {{ $groupname }}</p>
                </div>
                {{-- <img id="pictureUrl" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
                {{-- <img src="images/pictures/0t.jpg" width="115" class="rounded-circle mt-3 shadow-xl preload-img"> --}}
            </div>
        </div>

    </div>

</div>


@endsection

@section('footer_script')



@endsection
