<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/style.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
        <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">

        @yield('header_script')

    </head>

    <body class="theme-light" data-background="none" data-highlight="red2">

        <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

        <div>

            <div id="footer-bar" class="footer-bar-1">
                <a class="@yield('menu-active-home')" href="{{ url('/') }}/main"><i class="fa fa-home"></i><span>Home</span></a>
                <a class="@yield('menu-active-profile')" href="{{ route('profile') }}"><i class="fa fa-address-book"></i><span>โปรไฟล์</span></a>
                <a class="@yield('menu-active-slip')" href="{{ route('slip') }}"><i class="fa fa-print"></i><span>สลิป</span></a>
                <a class="@yield('menu-active-expenses')" href="{{ route('expenses') }}"><i class="fa fa-bold"></i><span>ค่าใช้จ่าย</span></a>
                <a href="#" onclick="closed()"><i class="fa fa-times"></i><span>Close</span></a>
            </div>

        <!-- content -->
        @yield('content')
        <!-- //content -->

        </div>

        <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>

        <script>

        function closed() {
            liff.closeWindow()
        }

        </script>

<script>

    async function main() {
        liff.ready.then(() => {
            if (liff.isLoggedIn()) {
                getUserProfile()
            } else {
                liff.login()
            }
        })
        await liff.init({ liffId: "1654103357-R6WV3eWM" })
    }
    main()

    async function getUserProfile() {
        const profile = await liff.getProfile()
        document.getElementById("pictureUrl").src = profile.pictureUrl
        document.getElementById("displayName").append(profile.displayName)
        document.getElementById("userId").append(profile.userId)
        document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
        $('#displayName').val(profile.displayName);
        $('#userId').val(profile.userId);
        $('#decodedIDToken2').val(liff.getDecodedIDToken().email);
    }

</script>

        @yield('footer_script')

        <script type="text/javascript" src="{{ asset('scripts/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>

    </body>

</html>
