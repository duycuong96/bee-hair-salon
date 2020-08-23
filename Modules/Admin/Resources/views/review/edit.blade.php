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
                        <input type="text" disabled class="form-control" name="customer_id"
                            value="{{ $data->customer->name }}">
                    </div>
                    <div class="form-group">
                        <label>Tên salon:</label>
                        <input type="text" disabled class="form-control" name="salon_id"
                            value="{{ $data->branchSalon->name }}">
                    </div>
                    <div class="form-group">
                        <label>Mức độ hài lòng:</label>
                        <p>
                            <span
                                class="fa fa-star {{ $data->rating_stars >= 1 ? 'text-warning' : '' }}"></span>
                            <span
                                class="fa fa-star {{ $data->rating_stars >= 2 ? 'text-warning' : '' }}"></span>
                            <span
                                class="fa fa-star {{ $data->rating_stars >= 3 ? 'text-warning' : '' }}"></span>
                            <span
                                class="fa fa-star {{ $data->rating_stars >= 4 ? 'text-warning' : '' }}"></span>
                            <span
                                class="fa fa-star {{ $data->rating_stars >= 5 ? 'text-warning' : '' }}"></span>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Nội dung đánh giá:</label>
                        <textarea name="detail" disabled class="form-control" rows="10">{{ $data->detail }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <br>
                        <div class="icheck-primary d-inline">
                          <input
                                type="radio"
                                id="radioPrimary1"
                                name="status"
                                value="{{STATUS_ACCOUNT_CUSTOMER_REGISTER}}"
                                {{ ($data->status == STATUS_ACCOUNT_CUSTOMER_REGISTER) ? 'checked' : '' }}>
                          <label for="radioPrimary1">
                              Chờ xét duyệt
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input
                                type="radio"
                                id="radioPrimary2"
                                name="status"
                                value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}"
                                {{ ($data->status == STATUS_ACCOUNT_CUSTOMER_ACTIVE) ? 'checked' : ''}}>
                          <label for="radioPrimary2">
                              Đã xét duyệt
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input
                                type="radio"
                                id="radioPrimary3"
                                name="status"
                                value="{{STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE}}"
                                {{ ($data->status == STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE) ? 'checked' : ''}}>
                          <label for="radioPrimary3">
                              Đã ẩn
                          </label>
                        </div>
                      </div>
                    <div class="form-group d-flex justify-content-center">
                        <a href="{{ route('admin.danh-gia.index') }}"
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
