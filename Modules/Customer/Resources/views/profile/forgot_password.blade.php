
@extends('client::layouts.master')
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

                <form
                    action="{{ route('customer.tai-khoan.update', Auth::user()->id) }}"
                    method="post">
                    @csrf
                    @method('PUT')
                    <div class="content-wrap">
                        <h4 class="text-center mt-5">Đổi mật khẩu</h4>
                        <form action="" method="POST">
                            <div class="contact-form">
                                <div class="contact-name form-group">
                                    <label for="">Mật khẩu cũ</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="contact-name form-group">
                                    <label for="">Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="newPassword">
                                </div>
                                <div class="contact-name form-group">
                                    <label for="">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" name="reNewPassword">
                                </div>
                                <button type="submit" id="submit-message" class=" btn btn-primary text-center">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>







@endsection
