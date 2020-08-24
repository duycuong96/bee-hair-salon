@extends('customer::layouts.master')
@section('title','BeeHair')
@section('content')


<!-- banner -->
<section class="inner-page-banner" id="home">
</section>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="index.html">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Tài khoản</li>
    </ol>
</div>
<!-- //page details -->
<div class="student-profile py-4">
    <div class="container">
        <div class="row">

            @include('customer::profile.manage_profile')

            <div class="col-lg-8">
                <div class="content-wrap">
                    <h4 class="text-center mt-5">Cập nhật tài khoản</h4>
                    <form
                        action="{{ route('customer.tai-khoan.update', Auth::user()->id) }}"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div class="contact-form">
                            <div class="contact-name form-group">
                                <label for="">Tên</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="contact-name form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone"
                                    value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="contact-name form-group">
                                <label for="">Sinh nhật</label>
                                <input type="date" class="form-control" name="birthday"
                                    value="{{ Auth::user()->birthday }}">
                            </div>
                            <div class="contact-name form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ Auth::user()->address }}">
                            </div>
                            <button type="submit" id="submit-message" class=" btn btn-primary text-center">Cập
                                nhật</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>







@endsection

@push('scripts')
    <script src="{{ asset('client/js/jquery-3.5.1.min.js') }}"></script>
    <script>
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#image').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function() {
            $('#image').click(function(){
                $('#img').click();
            });
        });
    </script>
@endpush
