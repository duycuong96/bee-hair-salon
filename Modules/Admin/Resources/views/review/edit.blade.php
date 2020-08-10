@extends('admin::layouts.master')

@section('title', 'Cập nhật đánh giá')

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
                    <form action="{{ route('admin.danh-gia.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tên khách hàng:</label>
                            <input type="text" disabled class="form-control" name="customer_id" value="{{ $data->customer_id }}">
                        </div>
                        <div class="form-group">
                            <label>Tên salon:</label>
                            <input type="text" disabled  class="form-control" name="salon_id" value="{{ $data->salon_id }}">
                        </div>
                        <div class="form-group">
                            <label>Tên nhận viên:</label>
                            <input type="text" disabled  class="form-control" name="employee_id" value="{{ $data->employee_id }}">
                        </div>
                        <div class="form-group">
                            <label>Mức độ hài lòng:</label>
                            <input type="text" disabled  class="form-control" name="salon_id" value="{{ $data->salon_id }}">
                        </div>
                        <div class="form-group">
                            <label>Nội dung đánh giá:</label>
                            <textarea name="detail" disabled class="form-control" rows="10">{{ $data->detail }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái:</label>
                            <input type="text" class="form-control" name="status" value="{{ $data->status }}">
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.danh-gia.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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

@endpush
