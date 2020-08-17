@extends('admin::layouts.master')

@section('title', 'Bài viết')

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
                            <label>Tiêu đề bình luận:</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $data->title) }}"
                                disabled>
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10" disabled></textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái bình luận:</label>
                            <br>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" name="status"
                                    value="{{ STATUS_ACCOUNT_CUSTOMER_ACTIVE }}" checked>
                                <label for="radioPrimary1">
                                    Không chấp nhận
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary2" name="status"
                                    value="{{ STATUS_ACCOUNT_CUSTOMER_ACTIVE }}">
                                <label for="radioPrimary2">
                                    Chấp nhận
                                </label>
                            </div>
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
