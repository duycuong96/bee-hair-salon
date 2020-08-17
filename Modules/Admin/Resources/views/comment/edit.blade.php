@extends('admin::layouts.master')

@section('title', 'Cập nhật bình luận')

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
                            <label>tiêu đề:</label>
                            <input disabled type="text" class="form-control" name="title" value="{{ old('title', $data->title) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề bài viết:</label>
                            <input disabled type="text" class="form-control" name="title" value="{{ old('title', $data->post_id) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <input disabled type="text" class="form-control" name="title" value="{{ old('title', $data->content) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Người bình luận:</label>
                            <input disabled type="text" class="form-control" name="title" value="{{ old('title', $data->customer_id) }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái tài khoản:</label>
                            <br>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary1" name="active" value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}" checked>
                              <label for="radioPrimary1">
                                  Chưa kích hoạt
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2" name="active" value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}">
                              <label for="radioPrimary2">
                                  Hoạt động
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2" name="active" value="{{STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE}}">
                              <label for="radioPrimary2">
                                  Đã khóa
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
