@extends('layouts.theme')
@section('menu-active-timestamp','active-nav')
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

                <div class="card card-style text-center">

                    <div class="row mr-2 ml-2 mb-0">

                        <div class="content mb-0">
                            <h1 class="text-center mb-2">{{ $username }}</h1>
                            <p class="font-11 mb-0"><b>ID:</b> {{ $lineid }}</p>
                                <div class="divider"></div>
                                <h3 class="text-center mb-2">กดปุ่มเพื่อลงเวลาเข้าหรือออกงาน</h3>
                                <p class="mt-n2 mb-12"><br></p>
                        </div>

                        <div class="row mr-2 ml-2 mb-0">
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-xxl btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s  border-blue2-dark bg-blue2-light">เข้างาน</a>
                            </div>
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-xxl btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s border-red2-dark  bg-red2-light">ออกงาน</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <!-- End of Page Content-->


@endsection

@section('liff_script')

<script>

async function getUserProfile() {
		const profile = await liff.getProfile()
		document.getElementById("pictureUrl").src = profile.pictureUrl
// 		document.getElementById("statusMessage").append(profile.statusMessage)
		document.getElementById("displayName").append(profile.displayName)
        document.getElementById("userId").append(profile.userId)
// 		document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
// 		$('#displayName').val(profile.displayName);
        $('#userId').val(profile.userId);
// 		$('#displayEmail').val(liff.getDecodedIDToken().email);

	  }
</script>

<script>
    var x = document.getElementById("locationPoint");
    var x1 = document.getElementById("locationPoint1");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
        x.value = position.coords.latitude + "," + position.coords.longitude;
        x1.value = position.coords.latitude + "," + position.coords.longitude;
    }

</script>

@endsection

@section('footer_script')


@endsection
