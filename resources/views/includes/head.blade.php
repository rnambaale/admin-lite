<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
    @if(!empty($title))
        {{ $title }}
    @else
        AdminLTE 3
    @endif

</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

{{--CSRF Token--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('includes.styles')

