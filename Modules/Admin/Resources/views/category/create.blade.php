@extends('admin::layouts.master')

@section('title', 'Chuyên mục')

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
                    <form action="{{ route('admin.chuyen-muc.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội dung mô tả:</label>
                            <textarea class="textarea" name="description" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{ old('description') }}</textarea>
                            @error('description')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện chuyên mục:</label>
                            <input id="img" type="file" class="form-control" name="image" onchange="changeImg(this)">
                            <img id="image" class="img-thumbnail img-fluid mt-3"  src="img/import-img.png">
                            @error('image')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Trạng thái:</label>
                            <br>
                            <div class="icheck-primary d-inline">
                                <input
                                        type="radio"
                                        id="radioPrimary1"
                                        name="status"
                                        value="{{STATUS_POST_DRAFT}}">
                                <label for="radioPrimary1">
                                    Chưa công khai
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input
                                        type="radio"
                                        id="radioPrimary2"
                                        name="status"
                                        value="{{STATUS_POST_PUBLIC}}">
                                <label for="radioPrimary2">
                                        Công khai
                                </label>
                            </div>
                            @error('status')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-group d-flex justify-content-center">
                            <a href="{{ route('admin.chuyen-muc.index') }}" class="btn btn-lg btn-default mr-3">Trở lại</a>
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
        $(function () {
            // Summernote
            $('.textarea').summernote()
                    //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush
