@extends('admin::layouts.master')

@section('title', 'Cập nhật bài viết')

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
                    <form action="{{ route('admin.bai-viet.update', [$data->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group">
                            <label>Tên tiêu đề:</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $data->title) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nôi dung:</label>
                            <textarea name="content" class="form-control" id="" cols="30" rows="10"> {{$data->content}} </textarea>
                            @error('content')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh:</label>
                            <input type="file" class="form-control" name="image" value="{{ old('name', $data->image) }}">
                            @error('image')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.bai-viet.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
