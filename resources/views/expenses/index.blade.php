@extends('layouts.theme')
@section('menu-active-expenses','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">

        <div class="card-header bg-red1-dark">
            <h2 class="color-white pt-2">{{ $moduletitle }}</h2>
        </div>
        <div class="content">
            <div class="todo-list list-group list-custom-small ml-2">
                <span>Expense</span>
            </div>
        </div>

    </div>

</div>

@endsection

@section('footer_script')



@endsection
