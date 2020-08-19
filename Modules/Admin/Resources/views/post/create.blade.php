@extends('admin::layouts.master')

@section('title', 'Thêm bài viết')

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
                    <form action="{{ route('admin.bai-viet.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tên tiêu đề:</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            @error('title')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ảnh bài viết:</label>
                            <input type="file" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label>Chuyên mục:</label>
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option value="">Chọn chuyên mục</option>
                                    <option>Thời trang tóc</option>
                                    <option>Phụ kiện</option>
                                    <option>Tư vấn làm đẹp</option>
                                    <option>Kinh nghiệm hay</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.bai-viet.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
                            <button type="submit" class="btn btn-lg btn-primary">Thêm mới</button>
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

    </script>
@endpush
