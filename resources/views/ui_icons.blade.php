@extends ("layouts.base")


@section('extra-css')
@parent
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection


@push('extra-js')
<!-- PAGE SCRIPTS -->
{{-- END PAGE LEVEL SCRIPTS --}}
@endpush

@section('main-content')  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Icons</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Icons</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
            <h3 class="card-title">Icons</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">
            <p>You can use any font library you like with AdminLTE 3.</p>
            <strong>Recommendations</strong>
            <div>
                <a href="https://fontawesome.com/">Font Awesome</a><br>
                <a href="https://useiconic.com/open/">Iconic Icons</a><br>
                <a href="http://ionicons.com/">Ion Icons</a><br>
            </div>
            </div><!-- /.card-body -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection