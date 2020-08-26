@extends('admin::layouts.master')


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
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('admin.dich-vu.update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
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
                        <label>Ảnh dịch vụ:</label>
                        <input id="img" type="file" class="form-control" name="image" value="{{ old('image', $data->image) }}" onchange="changeImg(this)">
                        <img id="image" class="img-thumbnail img-fluid mt-3" src="{!! url('storage/'.  $data->image) !!}" alt="">
                        @error('image')
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
                        <input type="text" class="form-control" name="estimate" size="5" placeholder="hh:mm" id="hour"
                            maxlength="5" onkeypress="return formatTime(event,this)" value="{{ $data->estimate }}">
                        @error('estimate')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Trạng thái tài khoản:</label>
                        <br>
                        <div class="icheck-primary d-inline">
                          <input
                                type="radio"
                                id="radioPrimary2"
                                name="status"
                                value="{{ 1 }}"
                                {{ ($data->status == 1) ? 'checked' : ''}}>
                          <label for="radioPrimary2">
                              Hoạt động
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input
                                type="radio"
                                id="radioPrimary3"
                                name="status"
                                value="{{ 0 }}"
                                {{ ($data->status == 0) ? 'checked' : ''}}>
                          <label for="radioPrimary3">
                              Không hoạt động
                          </label>
                        </div>
                      </div>
                    <hr>
                    <div class="form-group d-flex justify-content-center">
                        <a href="{{ route('admin.dich-vu.index') }}"
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
    <script>
        function formatTime(evt, num) {
            // get keyboard event and then look its keyCode
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            //check the event is numeric
            if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 186) {

                return false;
            }

            // Check accordingly every new number must include regular date format

            if (num.value.length == 0 && (charCode == 48 || charCode == 49 || charCode == 50)) {
                return true;
            } else if (num.value.length == 1 && (charCode >= 48 && charCode <= 51)) {
                return true;
            } else if (num.value.length == 2 && (charCode >= 48 && charCode <= 53)) {
                num.value = num.value + ":";
                return true;
            } else if (num.value.length == 3 && (charCode >= 48 && charCode <= 53)) {
                //alert("Bingo");
                return true;
            } else if (num.value.length == 4 && (charCode >= 48 && charCode <= 57)) {
                return true;
            } else {
                return false;
            }

            return true;
        }

    </script>

@endpush
