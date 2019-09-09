{{-- jQuery --}}
<script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}"></script>

{{-- Bootstrap 4 --}}
<script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- ChartJS --}}
<script src="{{ asset('admin-lte/plugins/chart.js/Chart.min.js') }}"></script>


{{-- overlayScrollbars --}}
<script src="{{ asset('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
{{-- AdminLTE App --}}
<script src="{{ asset('admin-lte/dist/js/adminlte.js') }}"></script>

<script src="{{ asset('admin-lte/dist/js/demo.js') }}"></script>
{{-- END PAGE LEVEL SCRIPTS --}}


{{-- BEGIN DYNAMIC SCRIPTS --}}
@stack('extra-js')
{{-- END DYNAMIC SCRIPTS --}}
