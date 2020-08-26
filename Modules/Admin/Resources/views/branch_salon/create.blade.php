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
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                            @error('image')
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
                            <label>Giờ làm việc</label>
                            <br>
                        <div class="btn-group">
                            <label>Giờ bắt đầu: </label>
                            <input type="time" class="mr-3 ml-3" name="start" value="{{ old('start') }}" min="08:00" max="22:00">

                            <label>Giờ kết thúc: </label>
                            <input type="time" class="ml-3" name="end" value="{{ old('end') }}" min="08:00" max="22:00">

                        </div>
                        <br>
                            @error('start')
                            <p class="mt-3 errorMsg text-danger">{{ $message }}</p>
                            @enderror
                            @error('end')
                            <p class="mt-3 errorMsg text-danger">{{ $message }}</p>
                            @enderror
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                            @error('address')
                            <br>
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
                            <label>Số ghế:</label>
                            <input type="text" class="form-control" name="seat" value="{{ old('seat') }}">
                            @error('seat')
                            <span class="mt-3 errorMsg text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group no-print">
                            <label>Trạng thái:</label>
                            <br>
                            <div class="icheck-primary d-inline">
                              <input
                                    type="radio"
                                    id="radioPrimary1"
                                    name="status"
                                    value="{{STATUS_ACCOUNT_CUSTOMER_REGISTER}}"
                                    checked>
                              <label for="radioPrimary1">
                                  Chưa hoạt đông
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input
                                    type="radio"
                                    id="radioPrimary2"
                                    name="status"
                                    value="{{STATUS_ACCOUNT_CUSTOMER_ACTIVE}}">
                              <label for="radioPrimary2">
                                  Đã hoạt động
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input
                                    type="radio"
                                    id="radioPrimary3"
                                    name="status"
                                    value="{{STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE}}">
                              <label for="radioPrimary3">
                                  Đã đóng cửa
                              </label>
                            </div>
                          </div>
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
<script>
    <script>

        function showModalSelect(data) {
            $('#selectAdress select option').remove();
            $.each(data, function(key, value) {
                let option = '<option>' + value.address1 + value.address2 + value.address3 + '</option>';
                $('#selectAdress select').append(option);
            });
            $('#ModalAddress').modal('show');
        }

        function fetchData(data) {
            if (data == null || data.length == 0) {
                $("#address").val('');
                return;
            }
            if (data.length == 1) {
                let address = data[0].name;
                $("#address").val(address);
            } else {
                showModalSelect(data);
                $('#selectAdress').on('change', 'select', function() {
                    let address = $(this).val();
                    $("#address").val(address);
                    $('#ModalAddress').modal('hide');
                });
            }
        }
        $(document).ready(function() {
            var url = "{{ route('address.ward') }}" + "?code=";
            console.log('ready');
            $('#postCode').on('change', function() {
                $.ajax({
                    url: url + $('#postCode').val(),
                    dataType: "json",
                    success: function(res) {
                        console.log(res);
                        fetchData(res.data);
                    }
                });
            });
        })

    </script>
@endpush
