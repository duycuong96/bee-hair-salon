@extends('admin::layouts.master')

@section('title', 'Cập nhật Banner')

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
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.thoi-gian-bieu.update', [$data->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- time Picker -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Thời gian bắt đầu:</label>

                                        <div class="input-group date" id="time-start" data-target-input="nearest">
                                            <input type="text" name="time_start" class="form-control datetimepicker-input" data-target="#time-start" value="{{ old('time_start', $data->time_start) }}" />
                                            <div class="input-group-append" data-target="#time-start" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bootstrap-timepicker">
                                    <div class="form-group">
                                        <label>Thời gian kết thúc:</label>

                                        <div class="input-group date" id="time-end" data-target-input="nearest">
                                            <input type="text" name="time_end" class="form-control datetimepicker-input" data-target="#time-end" value="{{ old('time_end', $data->time_end) }}" />
                                            <div class="input-group-append" data-target="#time-end" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.thoi-gian-bieu.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
                            <button type="submit" class="btn btn-lg btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection

@push('scripts')
<script>
    $(function () {

        //Timepicker
        $('#time-start').datetimepicker({
            pickTime: true,
            format: 'HH:mm:ss',
        })
        $('#time-end').datetimepicker({
            pickTime: true,
            format: 'HH:mm:ss',
        })

    })
</script>
@endpush
