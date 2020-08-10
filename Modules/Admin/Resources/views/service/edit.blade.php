@extends('admin::layouts.master')

@section('title', 'Cập nhật dịch vụ')

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
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                      {{session('success')}}
                    </div>
                    @endif
                    <form action="{{ route('admin.dich-vu.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Tên:</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh dich-vu:</label>
                            <br>
                            @foreach ($data->images as $image)
                                <img src="{!! url('storage/'.$image) !!}" alt="" height="70px">
                            @endforeach
                            <input type="file" class="form-control" name="arrayImages[]" multiple>
                            @error('images')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Chi tiết dich-vu:</label>
                            <textarea name="detail" class="form-control" id="" rows="10">{{ $data->detail }}</textarea>
                            @error('detail')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá:</label>
                            <input type="text" class="form-control" name="price" value="{{ $data->price }}">
                            @error('price')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá sau khi giảm:</label>
                            <input type="text" class="form-control" name="sale_price" value="{{ $data->sale_price }}">
                            @error('sale_price')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Thời gian hết hạn:</label>
                            <input type="text" class="form-control" name="estimate" value="{{ $data->estimate }}">
                            @error('estimate')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.dich-vu.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
