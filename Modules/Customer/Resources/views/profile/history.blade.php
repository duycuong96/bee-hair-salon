
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
                        <h4 class="text-center mt-5">Lịch sử đặt lịch & Đánh giá</h4>
                            <!-- The Timeline -->

                            <ul class="timeline">

                                <!-- Item 1 -->
                                <li>
                                    <div class="direction-r">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">My current employment. Way better than the position before!</div>
                                    </div>
                                </li>
                            
                                <!-- Item 2 -->
                                <li>
                                    <div class="direction-l">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
                                    </div>
                                </li>

                                <!-- Item 3 -->
                                <li>
                                    <div class="direction-r">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="direction-l">
                                        <div class="flag-wrapper">
                                            <span class="flag">Salon Trần Hữu Dực, Hà Nội</span>
                                            <span class="time-wrapper"><span class="time">Thứ 5 - 24/07/2020</span></span>
                                        </div>
                                        <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                                    </div>
                                </li>
                            
                            </ul>



                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>





  

@endsection