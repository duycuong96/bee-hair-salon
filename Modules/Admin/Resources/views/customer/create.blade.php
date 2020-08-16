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
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.khach-hang.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tên:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Avatar:</label>
                            <input type="text" class="form-control" name="avatar" value="{{ old('avatar') }}">
                            @error('avatar')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sinh nhật:</label>
                            <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">
                            @error('birthday')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại:</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            @error('address')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái tài khoản:</label>
                            <br>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary1" name="status" value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}" checked>
                              <label for="radioPrimary1">
                                  Chưa kích hoạt
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2" name="status" value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}">
                              <label for="radioPrimary2">
                                  Hoạt động
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2" name="status" value="{{STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE}}">
                              <label for="radioPrimary2">
                                  Đã khóa
                              </label>
                            </div>
                          </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.khach-hang.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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

@endpush
