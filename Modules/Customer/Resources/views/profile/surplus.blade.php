
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
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                    <h4 class="text-center pt-3">User Name</h4>
                    <div class="card-body">
                        <ul>
                            <li>
                                <a href="/tai-khoan/cap-nhat">Cập nhật tài khoản</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/doi-mat-khau">Đổi mật khẩu</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/so-du">Số dư</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/thong-bao">Thông báo</a>
                            </li>
                            <li>
                                <a href="/tai-khoan/lich-su&danh-gia">Lịch sử đặt lịch & Đánh giá</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary">Đăng xuất</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <form>
                    <div class="content-wrap">
                        <h4 class="text-center py-3 border-bottom">Số dư tài khoản</h4>
                        <p class="text-center text-danger">Hiện tại không có số dư tài khoản</p>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>







@endsection
