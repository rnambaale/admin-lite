{{-- Font Awesome --}}
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">



{{-- Theme style --}}
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
{{-- overlayScrollbars --}}
<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

{{-- Google Font: Source Sans Pro --}}
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


{{-- BEGIN DYNAMIC CSS --}}
@yield('extra-css')
{{-- END DYNAMIC CSS --}}
