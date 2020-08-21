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
                    <form action="{{ route('admin.banner.update', [$data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group">
                            <label>Tên:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $data->name) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề:</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $data->title) }}">
                            @error('title')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Banner:</label>
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                            @error('image')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <textarea name="desc" class="form-control" id="">{{ old('desc', $data->desc) }}</textarea>
                            @error('desc')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn:</label>
                            <input type="text" class="form-control" name="url" value="{{ old('url', $data->url) }}">
                            @error('url')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái:</label>

                            <select class="custom-select" name="active">
                                    <option
                                        {{ $data->active == STATUS_ACCOUNT_CUSTOMER_ACTIVE ? 'selected' : '' }}
                                        value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}">Hiện</option>
                                    <option
                                        {{ $data->active == STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE ? 'selected' : '' }}
                                        value="{{STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE}}">Ẩn</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.banner.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
