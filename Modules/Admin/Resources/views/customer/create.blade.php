@extends('admin::layouts.master')

@section('title', 'Khách hàng')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới @yield('title')</h3>
                </div>
                <div class="card-body">
                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>Tên:</label>
                        <input type="text" class="form-control my-colorpicker1">
                    </div>
                    <!-- /.form group -->

                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>Color picker with addon:</label>

                        <div class="input-group my-colorpicker2">
                            <input type="text" class="form-control">

                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Time picker:</label>

                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
