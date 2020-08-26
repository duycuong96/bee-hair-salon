@extends('admin::layouts.master')

@section('title', 'Đăng ký dịch vụ salon')

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
                    @if (session('error'))
                        <p class="text-danger"> {{ session('error') }} </p>
                    @elseif(session('success'))
                        <p class="text-success"> {{ session('success') }} </p>
                    @endif
                    <form action="{{ route('admin.dich-vu-salon.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                              <label>Tên salon:</label>
                            <input type="hidden" name="salon_id" value="{{$salon->id}}">
                              <input type="text" name="name" class="form-control" value="{{$salon->name}}" id="" readonly>
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tên dịch vụ:</label>
                            <select class="custom-select" name="service_id">
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @error('email')
                                <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
