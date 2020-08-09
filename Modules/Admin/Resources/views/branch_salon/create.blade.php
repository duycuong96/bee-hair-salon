@extends('admin::layouts.master')

@section('title', 'Thêm salon')

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
                    <form action="{{ route('admin.salon.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh salon:</label>
                            <input type="file" class="form-control" name="thumb_img" value="{{ old('thumb_img') }}">
                            @error('thumb_img')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giới thiệu Salon:</label>
                            <textarea name="content" class="form-control" id="" rows="10">{{ old('content') }}</textarea>
                            @error('content')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label>Giờ làm việc:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            @error('address')
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
                        <input type="hidden" name="ward_id" value="2">
                        <input type="hidden" name="admin" value="2">
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.salon.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
@endpush
