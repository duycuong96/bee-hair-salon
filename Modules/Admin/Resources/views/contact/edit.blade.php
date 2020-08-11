@extends('admin::layouts.master')

@section('title', 'Cập nhật liên hệ')

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
                <form action="{{ route('admin.lien-he.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Tên khách hàng:</label>
                        <input type="text" disabled class="form-control" name="customer_id" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại:</label>
                        <input type="text" disabled class="form-control" name="salon_id" value="{{ $data->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Tiêu đề:</label>
                        <input type="text" disabled class="form-control" name="salon_id" value="{{ $data->title }}">
                    </div>
                    <div class="form-group">
                        <label>Nội dung liên hệ:</label>
                        <textarea name="detail" disabled class="form-control"
                            rows="10">{{ $data->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <select class="custom-select" name="status">
                            <option
                                {{ $data->status == 1 ? 'selected' : '' }}
                                value="1">Chưa trả lời</option>
                                <option
                                    {{ $data->status == 2 ? 'selected' : '' }}
                                    value="2">Đã trả lời</option>
                        </select>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <a href="{{ route('admin.lien-he.index') }}"
                            class="btn btn-lg btn-default mr-3">Trở lại</a>
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
