<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> <!-->
<html lang="en"> <!--<![endif]-->

{{-- BEGIN HEAD --}}
<head>
    @include('includes.head')
</head>
{{-- END HEAD --}}

@section('body')
    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">

            @include('includes.header')

            @include('includes.sidebar')

            @yield('main-content')

            @include('includes.footer')

        </div>
        {{-- ./wrapper --}}


        @include('includes.scripts')

    </body>
@show

</html>
